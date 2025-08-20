<?php
// fill.php - Public form fill page
require_once 'shared.php';

$id = $_GET['id'] ?? '';
$form = getForm($id);

if (!$form) {
    header("Location: index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $answers = [];
    foreach ($form['fields'] as $field) {
        $value = $_POST[$field['id']] ?? '';
        
        // Handle file uploads (camera)
        if (($field['type'] === 'frontcam' || $field['type'] === 'backcam') && isset($_FILES[$field['id']])) {
            $file = $_FILES[$field['id']];
            $value = [
                'name' => $file['name'],
                'type' => $file['type'],
                'size' => $file['size'],
                'tmp_name' => $file['tmp_name']
            ];
            
            // In a real app, you'd move the uploaded file to permanent storage
            // move_uploaded_file($file['tmp_name'], "uploads/".uniqid()."_".$file['name']);
        }
        
        $answers[$field['id']] = $value;
    }
    
    if (saveResponse($id, $answers)) {
        $success = true;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Fill – <?php echo escapeHtml($form['title']); ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50">
  <div class="max-w-3xl mx-auto p-6">
    <a class="text-blue-600 underline" href="index.php">← Home</a>
    
    <?php if (isset($success)): ?>
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mt-4">
      Thank you! Your response has been submitted successfully.
    </div>
    <?php endif; ?>
    
    <div class="bg-white rounded-2xl shadow p-6 mt-4">
      <h1 class="text-2xl font-bold"><?php echo escapeHtml($form['title']); ?></h1>
      <p class="text-slate-600 mt-1 mb-4"><?php echo escapeHtml($form['description'] ?? ''); ?></p>
      
      <form method="post" enctype="multipart/form-data" class="space-y-4">
        <?php foreach ($form['fields'] as $field): ?>
          <?php 
          $req = $field['required'] ? 'required' : '';
          $reqStar = $field['required'] ? '<span class="text-red-600">*</span>' : '';
          ?>
          
          <?php if ($field['type'] === 'short'): ?>
            <label class='block'><?php echo escapeHtml($field['label']); ?> <?php echo $reqStar; ?>
              <input name="<?php echo $field['id']; ?>" class='mt-1 w-full border rounded-lg px-3 py-2' 
                     placeholder="<?php echo escapeAttr($field['placeholder']); ?>" <?php echo $req; ?>>
            </label>
          
          <?php elseif ($field['type'] === 'long'): ?>
            <label class='block'><?php echo escapeHtml($field['label']); ?> <?php echo $reqStar; ?>
              <textarea name="<?php echo $field['id']; ?>" class='mt-1 w-full border rounded-lg px-3 py-2' 
                        placeholder="<?php echo escapeAttr($field['placeholder']); ?>" <?php echo $req; ?>></textarea>
            </label>
          
          <?php elseif ($field['type'] === 'dropdown'): ?>
            <label class='block'><?php echo escapeHtml($field['label']); ?> <?php echo $reqStar; ?>
              <select name="<?php echo $field['id']; ?>" class='mt-1 w-full border rounded-lg px-3 py-2' <?php echo $req; ?>>
                <?php foreach (explode(',', $field['options']) as $option): ?>
                  <?php if (trim($option)): ?>
                    <option><?php echo escapeHtml(trim($option)); ?></option>
                  <?php endif; ?>
                <?php endforeach; ?>
              </select>
            </label>
          
          <?php elseif ($field['type'] === 'radio'): ?>
            <fieldset>
              <legend class='font-medium mb-1'><?php echo escapeHtml($field['label']); ?> <?php echo $reqStar; ?></legend>
              <div class='flex flex-wrap gap-4'>
                <?php foreach (explode(',', $field['options']) as $option): ?>
                  <?php if (trim($option)): ?>
                    <label class='flex items-center gap-2'>
                      <input type='radio' name="<?php echo $field['id']; ?>" value="<?php echo escapeAttr(trim($option)); ?>" <?php echo $req; ?>> 
                      <?php echo escapeHtml(trim($option)); ?>
                    </label>
                  <?php endif; ?>
                <?php endforeach; ?>
              </div>
            </fieldset>
          
          <?php elseif ($field['type'] === 'geo'): ?>
            <div>
              <div class='font-medium'><?php echo escapeHtml($field['label'] ?? 'Current Location'); ?> <?php echo $reqStar; ?></div>
              <input type='hidden' name="<?php echo $field['id']; ?>" id="<?php echo $field['id']; ?>_geo" <?php echo $req; ?>>
              <button type='button' class='mt-1 px-3 py-2 rounded-lg border' onclick='captureGeo("<?php echo $field['id']; ?>")'>Capture Location</button>
              <div id="<?php echo $field['id']; ?>_show" class='text-sm text-slate-600 mt-1'></div>
            </div>
          
          <?php elseif ($field['type'] === 'mobile'): ?>
            <label class='block'><?php echo escapeHtml($field['label']); ?> <?php echo $reqStar; ?>
              <input name="<?php echo $field['id']; ?>" type='tel' pattern='[0-9]{10}' class='mt-1 w-full border rounded-lg px-3 py-2' 
                     placeholder="<?php echo escapeAttr($field['placeholder'] ?? "10-digit mobile"); ?>" <?php echo $req; ?>>
            </label>
          
          <?php elseif ($field['type'] === 'email'): ?>
            <label class='block'><?php echo escapeHtml($field['label']); ?> <?php echo $reqStar; ?>
              <input name="<?php echo $field['id']; ?>" type='email' class='mt-1 w-full border rounded-lg px-3 py-2' 
                     placeholder="<?php echo escapeAttr($field['placeholder'] ?? "example@mail.com"); ?>" <?php echo $req; ?>>
            </label>
          
          <?php elseif ($field['type'] === 'frontcam'): ?>
            <label class='block'><?php echo escapeHtml($field['label'] ?? 'Front Camera'); ?> <?php echo $reqStar; ?>
              <input name="<?php echo $field['id']; ?>" type='file' accept='image/*' capture='user' class='mt-1 w-full border rounded-lg px-3 py-2' <?php echo $req; ?>>
            </label>
          
          <?php elseif ($field['type'] === 'backcam'): ?>
            <label class='block'><?php echo escapeHtml($field['label'] ?? 'Back Camera'); ?> <?php echo $reqStar; ?>
              <input name="<?php echo $field['id']; ?>" type='file' accept='image/*' capture='environment' class='mt-1 w-full border rounded-lg px-3 py-2' <?php echo $req; ?>>
            </label>
          <?php endif; ?>
        <?php endforeach; ?>
        
        <button class='px-4 py-2 rounded-xl bg-blue-600 text-white'>Submit</button>
      </form>
    </div>
  </div>

  <script>
    function captureGeo(id){
      if(!navigator.geolocation) return alert('Geolocation not supported');
      navigator.geolocation.getCurrentPosition(pos=>{
        const val = `${pos.coords.latitude},${pos.coords.longitude}`;
        document.getElementById(id+"_geo").value = val;
        document.getElementById(id+"_show").textContent = 'Captured: ' + val;
      }, err=> alert('Geo error: '+err.message));
    }
  </script>
</body>
</html>