<?php
// responses.php - View submissions
require_once 'shared.php';

$forms = getAllForms();
$selectedFormId = $_GET['form_id'] ?? ($forms[0]['id'] ?? '');
$responses = $selectedFormId ? getResponses($selectedFormId) : [];
$selectedForm = $selectedFormId ? getForm($selectedFormId) : null;

if (isset($_GET['export']) {
    $headers = array_map(function($field) {
        return $field['label'] ?? $field['type'];
    }, $selectedForm['fields']);
    
    $data = array_map(function($response) use ($selectedForm) {
        return array_map(function($field) use ($response) {
            $value = $response['answers'][$field['id']] ?? '';
            if (is_array($value)) {
                return $value['name'] ?? 'File uploaded';
            }
            return $value;
        }, $selectedForm['fields']);
    }, $responses);
    
    downloadCSV(($selectedForm['title'] ?? 'responses').'.csv', $headers, $data);
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>QRSurvey – Responses</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50">
  <div class="max-w-6xl mx-auto p-6">
    <div class="flex items-center justify-between">
      <h1 class="text-2xl font-bold">Responses</h1>
      <a class="text-blue-600 underline" href="builder.php">Create Form</a>
    </div>

    <div class="bg-white rounded-2xl shadow p-5 mt-4">
      <label class="block text-sm">Select Form
        <select id="formSel" class="mt-1 border rounded-lg px-3 py-2 w-full" onchange="window.location.href='responses.php?form_id='+this.value">
          <?php foreach ($forms as $form): ?>
            <option value="<?php echo $form['id']; ?>" <?php echo $selectedFormId === $form['id'] ? 'selected' : ''; ?>>
              <?php echo escapeHtml($form['title']); ?> (<?php echo count(getResponses($form['id'])); ?>)
            </option>
          <?php endforeach; ?>
        </select>
      </label>
      
      <?php if ($selectedForm): ?>
        <div class="mt-6">
          <h2 class="text-xl font-semibold mb-4"><?php echo escapeHtml($selectedForm['title']); ?></h2>
          <p class="text-slate-600 mb-4"><?php echo escapeHtml($selectedForm['description'] ?? ''); ?></p>
          
          <?php if (empty($responses)): ?>
            <p class="text-slate-500">No responses yet for this form.</p>
          <?php else: ?>
            <div class="overflow-x-auto">
              <table class="min-w-full text-sm">
                <thead>
                  <tr class="border-b">
                    <?php foreach ($selectedForm['fields'] as $field): ?>
                      <th class="text-left p-2"><?php echo escapeHtml($field['label'] ?? $field['type']); ?></th>
                    <?php endforeach; ?>
                    <th class="text-left p-2">Submitted At</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($responses as $response): ?>
                    <tr class="border-b">
                      <?php foreach ($selectedForm['fields'] as $field): ?>
                        <td class="p-2 align-top">
                          <?php 
                          $value = $response['answers'][$field['id']] ?? '';
                          if (is_array($value)) {
                              echo '📷 '.escapeHtml($value['name'] ?? 'File').' ('.($value['size'] ?? '0').' bytes)';
                          } else {
                              echo escapeHtml($value);
                          }
                          ?>
                        </td>
                      <?php endforeach; ?>
                      <td class="p-2"><?php echo date('M j, Y g:i a', strtotime($response['submitted_at'])); ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          <?php endif; ?>
          
          <?php if (!empty($responses)): ?>
            <div class="mt-4">
              <a href="responses.php?form_id=<?php echo $selectedFormId; ?>&export=1" class="px-4 py-2 rounded-xl bg-blue-600 text-white inline-block">Export CSV</a>
            </div>
          <?php endif; ?>
        </div>
      <?php elseif (!empty($forms)): ?>
        <p class="text-slate-500 mt-4">Select a form to view responses.</p>
      <?php else: ?>
        <p class="text-slate-500 mt-4">No forms yet. Create one to start collecting responses.</p>
      <?php endif; ?>
    </div>
  </div>
</body>
</html>