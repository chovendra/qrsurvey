<?php
// builder.php - Form builder
require_once 'shared.php';

$fields = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $form = [
        'id' => $_POST['form_id'] ?? uid(),
        'title' => $_POST['title'] ?? 'Untitled Form',
        'description' => $_POST['description'] ?? '',
        'fields' => json_decode($_POST['fields'], true) ?? []
    ];
    
    if (saveForm($form)) {
        $_SESSION['message'] = "Form saved successfully! Fill link: fill.php?id=".$form['id'];
        header("Location: builder.php?saved=".$form['id']);
        exit;
    }
} elseif (isset($_GET['saved'])) {
    $form = getForm($_GET['saved']);
    $fields = $form['fields'] ?? [];
    $message = $_SESSION['message'] ?? '';
    unset($_SESSION['message']);
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>QRSurvey – Form Builder</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f8fafc;
    }
    .sidebar-card {
      background: white;
      border-radius: 0.5rem;
      box-shadow: 0 1px 3px rgba(0,0,0,0.1);
      border: 1px solid #e2e8f0;
    }
    .field-card {
      background: white;
      border-radius: 0.5rem;
      box-shadow: 0 1px 2px rgba(0,0,0,0.05);
      border: 1px solid #e2e8f0;
    }
    .field-card:hover {
      border-color: #c7d2fe;
    }
    .btn {
      padding: 0.5rem 1rem;
      border-radius: 0.375rem;
      font-weight: 500;
      transition: all 0.2s;
    }
    .btn-primary {
      background-color: #4f46e5;
      color: white;
    }
    .btn-primary:hover {
      background-color: #4338ca;
    }
    .btn-outline {
      border: 1px solid #e2e8f0;
      color: #4f46e5;
    }
    .btn-outline:hover {
      background-color: #f1f5f9;
    }
    .btn-danger {
      color: #dc2626;
      background-color: #fee2e2;
    }
    .btn-danger:hover {
      background-color: #fecaca;
    }
    .form-input {
      border: 1px solid #e2e8f0;
      border-radius: 0.375rem;
      padding: 0.5rem 0.75rem;
      width: 100%;
    }
    .form-input:focus {
      outline: none;
      border-color: #c7d2fe;
      box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
    }
    .field-type-tag {
      font-size: 0.75rem;
      padding: 0.25rem 0.5rem;
      background-color: #e0e7ff;
      color: #4f46e5;
      border-radius: 9999px;
    }
  </style>
</head>
<body class="bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 py-8">
    <div class="flex flex-col lg:flex-row gap-8">
      <!-- Left sidebar -->
      <div class="lg:w-1/4 space-y-6">
        <!-- Form settings -->
        <div class="sidebar-card p-6">
          <h2 class="text-lg font-semibold mb-4">Form Settings</h2>
          <div class="space-y-4">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Title</label>
              <input id="formTitle" name="title" class="form-input" 
                     value="<?php echo isset($form) ? escapeAttr($form['title']) : ''; ?>" 
                     placeholder="Form Title" required>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
              <textarea id="formDesc" name="description" class="form-input" rows="3"
                        placeholder="Form description"><?php echo isset($form) ? escapeAttr($form['description']) : ''; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-full">
              Save Form
            </button>
          </div>
        </div>

        <!-- Field types -->
        <div class="sidebar-card p-6">
          <h2 class="text-lg font-semibold mb-4">Add Field</h2>
          <div class="grid grid-cols-2 gap-3">
            <button type="button" class="btn btn-outline" data-type="short">
              Short Text
            </button>
            <button type="button" class="btn btn-outline" data-type="long">
              Long Text
            </button>
            <button type="button" class="btn btn-outline" data-type="dropdown">
              Dropdown
            </button>
            <button type="button" class="btn btn-outline" data-type="radio">
              Radio
            </button>
            <button type="button" class="btn btn-outline" data-type="geo">
              Location
            </button>
            <button type="button" class="btn btn-outline" data-type="mobile">
              Mobile
            </button>
            <button type="button" class="btn btn-outline" data-type="email">
              Email
            </button>
            <button type="button" class="btn btn-outline" data-type="frontcam">
              Front Camera
            </button>
            <button type="button" class="btn btn-outline" data-type="backcam">
              Back Camera
            </button>
          </div>
        </div>
      </div>

      <!-- Main content -->
      <div class="lg:w-3/4 space-y-6">
        <form method="post">
          <input type="hidden" name="form_id" value="<?php echo isset($form) ? $form['id'] : ''; ?>">
          <input type="hidden" name="fields" id="fieldsInput" value="<?php echo escapeAttr(json_encode($fields)); ?>">

          <!-- Fields list -->
          <div class="space-y-4">
            <div class="flex justify-between items-center">
              <h2 class="text-lg font-semibold">Form Fields</h2>
              <span class="text-sm text-gray-500"><?php echo count($fields); ?> fields</span>
            </div>
            
            <div id="fieldsRoot" class="space-y-4">
              <?php if (empty($fields)): ?>
                <div class="text-center py-12 border-2 border-dashed border-gray-300 rounded-lg">
                  <p class="text-gray-500">No fields added yet</p>
                  <p class="text-sm text-gray-400 mt-1">Add fields using the panel on the left</p>
                </div>
              <?php endif; ?>
            </div>
          </div>

          <!-- Preview -->
          <div class="mt-8">
            <h2 class="text-lg font-semibold mb-4">Preview</h2>
            <div id="previewRoot" class="space-y-4 p-6 bg-white rounded-lg border border-gray-200">
              <?php if (empty($fields)): ?>
                <div class="text-center py-8 text-gray-400">
                  <p>Form preview will appear here</p>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    const fields = <?php echo json_encode($fields); ?>;
    const fieldsRoot = document.getElementById('fieldsRoot');
    const previewRoot = document.getElementById('previewRoot');
    const fieldsInput = document.getElementById('fieldsInput');

    // Render fields list
    function renderFields(){
      if (fields.length === 0) {
        fieldsRoot.innerHTML = `
          <div class="text-center py-12 border-2 border-dashed border-gray-300 rounded-lg">
            <p class="text-gray-500">No fields added yet</p>
            <p class="text-sm text-gray-400 mt-1">Add fields using the panel on the left</p>
          </div>`;
        return;
      }

      fieldsRoot.innerHTML = fields.map((f,idx)=>`
        <div class="field-card p-4">
          <div class="flex justify-between items-start mb-3">
            <div class="flex items-center gap-2">
              <span class="field-type-tag">${pretty(f.type)}</span>
              <span class="font-medium">${escapeHtml(f.label||'Untitled')}</span>
            </div>
            <button onclick="removeField(${idx})" class="btn btn-danger text-sm">
              Delete
            </button>
          </div>
          <div class="grid md:grid-cols-2 gap-4">
            <div>
              <label class="block text-sm text-gray-600 mb-1">Label</label>
              <input value="${escapeAttr(f.label)}" oninput="editField(${idx},'label',this.value)" 
                     class="form-input" placeholder="Field label">
            </div>
            <div>
              <label class="block text-sm text-gray-600 mb-1">Placeholder</label>
              <input value="${escapeAttr(f.placeholder)}" oninput="editField(${idx},'placeholder',this.value)" 
                     class="form-input" placeholder="Placeholder text">
            </div>
            ${ ['dropdown','radio'].includes(f.type) ? `
            <div class="md:col-span-2">
              <label class="block text-sm text-gray-600 mb-1">Options (comma separated)</label>
              <input value="${escapeAttr(f.options)}" oninput="editField(${idx},'options',this.value)" 
                     class="form-input" placeholder="Option 1, Option 2, Option 3">
            </div>` : ''}
            <div class="flex items-center">
              <input type="checkbox" id="required-${idx}" ${f.required?'checked':''} 
                     onchange="toggleReq(${idx})" class="mr-2">
              <label for="required-${idx}" class="text-sm text-gray-600">Required field</label>
            </div>
          </div>
        </div>`).join('');
    }

    // Render form preview
    function renderPreview(){
      if (fields.length === 0) {
        previewRoot.innerHTML = `
          <div class="text-center py-8 text-gray-400">
            <p>Form preview will appear here</p>
          </div>`;
        return;
      }

      previewRoot.innerHTML = `
        <div class="space-y-4">
          <h3 class="text-lg font-medium">${document.getElementById('formTitle')?.value || 'Form Preview'}</h3>
          ${document.getElementById('formDesc')?.value ? `
          <p class="text-gray-600">${document.getElementById('formDesc')?.value}</p>
          ` : ''}
          ${fields.map(f => previewField(f)).join('')}
          <button type="button" class="btn btn-primary w-full mt-4">
            Submit Form
          </button>
        </div>`;
    }

    // Preview field templates
    function previewField(f){
      const req = f.required ? '<span class="text-red-500">*</span>' : '';
      
      switch(f.type){
        case 'short':
          return `<div class="space-y-1">
            <label class="block text-sm font-medium">${escapeHtml(f.label)} ${req}</label>
            <input class="form-input" placeholder="${escapeAttr(f.placeholder)}" ${f.required?'required':''}>
          </div>`;
        case 'long':
          return `<div class="space-y-1">
            <label class="block text-sm font-medium">${escapeHtml(f.label)} ${req}</label>
            <textarea class="form-input" rows="3" placeholder="${escapeAttr(f.placeholder)}" ${f.required?'required':''}></textarea>
          </div>`;
        case 'dropdown':
          return `<div class="space-y-1">
            <label class="block text-sm font-medium">${escapeHtml(f.label)} ${req}</label>
            <select class="form-input" ${f.required?'required':''}>
              <option value="">Select an option</option>
              ${optsFrom(f.options).map(o=>`<option>${escapeHtml(o)}</option>`).join('')}
            </select>
          </div>`;
        case 'radio':
          return `<div class="space-y-2">
            <label class="block text-sm font-medium">${escapeHtml(f.label)} ${req}</label>
            <div class="space-y-2">
              ${optsFrom(f.options).map(o=>`
              <label class="flex items-center gap-2">
                <input type="radio" name="${f.id}" value="${escapeAttr(o)}" ${f.required?'required':''}>
                ${escapeHtml(o)}
              </label>`).join('')}
            </div>
          </div>`;
        case 'geo':
          return `<div class="space-y-2">
            <label class="block text-sm font-medium">${escapeHtml(f.label||'Location')} ${req}</label>
            <button type="button" class="btn btn-outline" 
              onclick="navigator.geolocation && navigator.geolocation.getCurrentPosition(p=>alert('Lat:'+p.coords.latitude+'\nLng:'+p.coords.longitude))">
              Capture Location
            </button>
          </div>`;
        case 'mobile':
          return `<div class="space-y-1">
            <label class="block text-sm font-medium">${escapeHtml(f.label)} ${req}</label>
            <input type="tel" pattern="[0-9]{10}" class="form-input" 
                   placeholder="${escapeAttr(f.placeholder||'10-digit mobile')}" ${f.required?'required':''}>
          </div>`;
        case 'email':
          return `<div class="space-y-1">
            <label class="block text-sm font-medium">${escapeHtml(f.label)} ${req}</label>
            <input type="email" class="form-input" 
                   placeholder="${escapeAttr(f.placeholder||'example@mail.com')}" ${f.required?'required':''}>
          </div>`;
        case 'frontcam':
        case 'backcam':
          return `<div class="space-y-2">
            <label class="block text-sm font-medium">${escapeHtml(f.label||(f.type==='frontcam'?'Front Camera':'Back Camera'))} ${req}</label>
            <div class="border border-dashed border-gray-300 rounded p-4 text-center">
              <p class="text-sm text-gray-500">Click to ${f.type==='frontcam'?'take a selfie':'capture photo'}</p>
              <input type="file" accept="image/*" capture="${f.type==='frontcam'?'user':'environment'}" class="hidden" ${f.required?'required':''}>
            </div>
          </div>`;
        default:
          return '';
      }
    }

    // Helper functions
    function optsFrom(s){ return s.split(',').map(x=>x.trim()).filter(Boolean); }
    function escapeHtml(s=''){ return s.replace(/[&<>]/g,tag=>({'&':'&amp;','<':'&lt;','>':'&gt;'}[tag])); }
    function escapeAttr(s=''){ return s.replace(/["']/g,char=>({'\"':'&quot;',"'":'&#39;'}[char])); }
    function pretty(t){
      const types = {
        short:'Short Text', long:'Long Text', dropdown:'Dropdown', radio:'Radio',
        geo:'Location', mobile:'Mobile', email:'Email', 
        frontcam:'Front Cam', backcam:'Back Cam'
      };
      return types[t]||t;
    }

    // Field manipulation functions
    window.editField = (i,k,v) => { 
      fields[i][k] = v; 
      renderPreview(); 
      updateFieldsInput(); 
    };
    
    window.toggleReq = (i) => { 
      fields[i].required = !fields[i].required; 
      renderPreview(); 
      updateFieldsInput(); 
    };
    
    window.removeField = (i) => { 
      if(confirm('Are you sure you want to remove this field?')) {
        fields.splice(i,1); 
        renderFields(); 
        renderPreview(); 
        updateFieldsInput();
      }
    };
    
    function updateFieldsInput() {
      fieldsInput.value = JSON.stringify(fields);
    }

    // Add new field
    document.querySelectorAll('[data-type]').forEach(btn => btn.addEventListener('click', () => {
      const type = btn.dataset.type;
      const item = { 
        id: 'field_' + Date.now().toString(36), 
        type, 
        label: pretty(type), 
        placeholder: '', 
        required: false, 
        options: '' 
      };
      fields.push(item); 
      renderFields(); 
      renderPreview();
      updateFieldsInput();
      
      // Scroll to the new field
      setTimeout(() => {
        fieldsRoot.lastElementChild?.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
      }, 100);
    }));

    // Initialize
    renderFields();
    renderPreview();
    
    // Watch for changes in form title/description to update preview
    document.getElementById('formTitle')?.addEventListener('input', renderPreview);
    document.getElementById('formDesc')?.addEventListener('input', renderPreview);
  </script>
</body>
</html>