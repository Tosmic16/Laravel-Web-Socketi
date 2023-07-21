<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Your other head content -->
<title>Document</title>
    <!-- Include the compiled asset using the vite() helper -->
    @vite('resources/js/app.js') 
</head>
<body class="bg-gray-200">
    <div class="max-w-md mx-auto mt-8 bg-white p-4 rounded-lg shadow">
        <form id="form">
            <div class="flex items-center justify-center mb-4">
                <input type="number" min="1" max="2" id="user" name="user"  required
                class="block w-48 mx-auto mb-2 px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300 text-sm">
    
            </div>
            <div class="flex items-center justify-center mb-4">
              
               
                <label for="message" class="font-bold text-sm mr-2">Enter your message:</label>
                <textarea id="message" name="message" rows="4" required
                    class="flex-1 px-3 py-2 border rounded-md resize-none focus:outline-none focus:ring focus:border-blue-300 text-sm"></textarea>
            </div>
            <button type="submit"
                class="w-full px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                Submit
            </button>
        </form>
    </div>

    <div class="max-w-md mx-auto mt-8 bg-white p-4 rounded-lg shadow">
        <!-- Chat Message List -->
        <ul class="divide-y divide-gray-300">
            <!-- Example Chat Message -->
            <li class="py-4">
               
                <div id="messages-chat" class="flex flex-col">
                   
                </div>
                
    </div>
</body>
</html>
