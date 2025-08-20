<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>QRSurvey – Staff Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 min-h-screen">
  <div class="max-w-7xl mx-auto p-6">
    <!-- Header -->
    <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4 mb-8">
      <div>
        <h1 class="text-3xl font-bold text-gray-800">Survey Dashboard</h1>
        <p class="text-gray-600">Manage all your survey forms and responses</p>
      </div>
      <a href="builder.php" class="px-6 py-3 rounded-lg bg-blue-600 text-white font-medium flex items-center gap-2 justify-center">
        <i class="fas fa-plus"></i> Create New Form
      </a>
    </div>

    <!-- Stats Overview -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
      <div class="bg-white rounded-xl shadow p-5">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-gray-500 text-sm">Total Forms</p>
            <h3 class="text-2xl font-bold">3</h3>
          </div>
          <div class="p-3 rounded-full bg-blue-100 text-blue-600">
            <i class="fas fa-list"></i>
          </div>
        </div>
      </div>
      <div class="bg-white rounded-xl shadow p-5">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-gray-500 text-sm">Total Responses</p>
            <h3 class="text-2xl font-bold">153</h3>
          </div>
          <div class="p-3 rounded-full bg-green-100 text-green-600">
            <i class="fas fa-chart-bar"></i>
          </div>
        </div>
      </div>
      <div class="bg-white rounded-xl shadow p-5">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-gray-500 text-sm">Active Surveys</p>
            <h3 class="text-2xl font-bold">2</h3>
          </div>
          <div class="p-3 rounded-full bg-purple-100 text-purple-600">
            <i class="fas fa-check-circle"></i>
          </div>
        </div>
      </div>
      <div class="bg-white rounded-xl shadow p-5">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-gray-500 text-sm">Avg. Completion</p>
            <h3 class="text-2xl font-bold">72%</h3>
          </div>
          <div class="p-3 rounded-full bg-yellow-100 text-yellow-600">
            <i class="fas fa-percentage"></i>
          </div>
        </div>
      </div>
    </div>

    <!-- Forms Section -->
    <div class="bg-white rounded-xl shadow overflow-hidden">
      <!-- Section Header -->
      <div class="border-b border-gray-200 px-6 py-4">
        <h2 class="text-lg font-semibold text-gray-800">Your Survey Forms</h2>
      </div>

      <!-- Forms Grid -->
      <div class="p-6">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
          <!-- Form Card 1 -->
          <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
            <div class="p-5">
              <div class="flex items-start justify-between gap-3 mb-3">
                <div>
                  <h3 class="font-semibold text-lg text-gray-800 mb-1">Customer Feedback</h3>
                  <p class="text-gray-500 text-sm">Collect feedback from customers about our services</p>
                </div>
                <div class="flex gap-1">
                  <span class="text-gray-400 p-1">
                    <i class="fas fa-ellipsis-v"></i>
                  </span>
                </div>
              </div>
              <div class="flex items-center gap-2 mb-4">
                <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Active</span>
                <span class="text-xs text-gray-500">Created: 15 Jun 2023</span>
              </div>
              <div class="flex items-center justify-between text-sm text-gray-600 mb-4">
                <div class="flex items-center gap-2">
                  <i class="fas fa-question-circle"></i>
                  <span>5 Questions</span>
                </div>
                <div class="flex items-center gap-2">
                  <i class="fas fa-reply"></i>
                  <span>24 Responses</span>
                </div>
              </div>
              <div class="border-t border-gray-100 pt-4">
                <div class="flex items-center justify-between">
                  <a href="responses.php?form_id=1" class="text-blue-600 font-medium text-sm flex items-center gap-1">
                    <i class="fas fa-chart-pie"></i> View Analytics
                  </a>
                  <div class="flex gap-2">
                    <a href="fill.php?id=1" class="text-gray-500 p-1" title="Preview">
                      <i class="fas fa-eye"></i>
                    </a>
                    <a href="fill.php?id=1" class="text-gray-500 p-1" title="Copy Link">
                      <i class="fas fa-link"></i>
                    </a>
                    <a href="builder.php?id=1" class="text-gray-500 p-1" title="Edit">
                      <i class="fas fa-pencil-alt"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Form Card 2 -->
          <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
            <div class="p-5">
              <div class="flex items-start justify-between gap-3 mb-3">
                <div>
                  <h3 class="font-semibold text-lg text-gray-800 mb-1">Employee Satisfaction</h3>
                  <p class="text-gray-500 text-sm">Quarterly survey to measure employee satisfaction</p>
                </div>
                <div class="flex gap-1">
                  <span class="text-gray-400 p-1">
                    <i class="fas fa-ellipsis-v"></i>
                  </span>
                </div>
              </div>
              <div class="flex items-center gap-2 mb-4">
                <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Active</span>
                <span class="text-xs text-gray-500">Created: 1 May 2023</span>
              </div>
              <div class="flex items-center justify-between text-sm text-gray-600 mb-4">
                <div class="flex items-center gap-2">
                  <i class="fas fa-question-circle"></i>
                  <span>10 Questions</span>
                </div>
                <div class="flex items-center gap-2">
                  <i class="fas fa-reply"></i>
                  <span>87 Responses</span>
                </div>
              </div>
              <div class="border-t border-gray-100 pt-4">
                <div class="flex items-center justify-between">
                  <a href="responses.php?form_id=2" class="text-blue-600 font-medium text-sm flex items-center gap-1">
                    <i class="fas fa-chart-pie"></i> View Analytics
                  </a>
                  <div class="flex gap-2">
                    <a href="fill.php?id=2" class="text-gray-500 p-1" title="Preview">
                      <i class="fas fa-eye"></i>
                    </a>
                    <a href="fill.php?id=2" class="text-gray-500 p-1" title="Copy Link">
                      <i class="fas fa-link"></i>
                    </a>
                    <a href="builder.php?id=2" class="text-gray-500 p-1" title="Edit">
                      <i class="fas fa-pencil-alt"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Form Card 3 -->
          <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
            <div class="p-5">
              <div class="flex items-start justify-between gap-3 mb-3">
                <div>
                  <h3 class="font-semibold text-lg text-gray-800 mb-1">Event Registration</h3>
                  <p class="text-gray-500 text-sm">Register for upcoming company events</p>
                </div>
                <div class="flex gap-1">
                  <span class="text-gray-400 p-1">
                    <i class="fas fa-ellipsis-v"></i>
                  </span>
                </div>
              </div>
              <div class="flex items-center gap-2 mb-4">
                <span class="px-2 py-1 bg-gray-100 text-gray-800 text-xs rounded-full">Draft</span>
                <span class="text-xs text-gray-500">Created: 20 Jul 2023</span>
              </div>
              <div class="flex items-center justify-between text-sm text-gray-600 mb-4">
                <div class="flex items-center gap-2">
                  <i class="fas fa-question-circle"></i>
                  <span>7 Questions</span>
                </div>
                <div class="flex items-center gap-2">
                  <i class="fas fa-reply"></i>
                  <span>42 Responses</span>
                </div>
              </div>
              <div class="border-t border-gray-100 pt-4">
                <div class="flex items-center justify-between">
                  <a href="responses.php?form_id=3" class="text-blue-600 font-medium text-sm flex items-center gap-1">
                    <i class="fas fa-chart-pie"></i> View Analytics
                  </a>
                  <div class="flex gap-2">
                    <a href="fill.php?id=3" class="text-gray-500 p-1" title="Preview">
                      <i class="fas fa-eye"></i>
                    </a>
                    <a href="fill.php?id=3" class="text-gray-500 p-1" title="Copy Link">
                      <i class="fas fa-link"></i>
                    </a>
                    <a href="builder.php?id=3" class="text-gray-500 p-1" title="Edit">
                      <i class="fas fa-pencil-alt"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>