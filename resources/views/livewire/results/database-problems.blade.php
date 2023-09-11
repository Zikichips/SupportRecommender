<div class="py-28">
  <div class="lg:max-w-4xl mx-auto">
    <h2 class="mt-2 text-xl font-semibold tracking-tight text-blue-500 sm:text-xl text-center">Database Problems</h2>
      <h1 class="mt-2 text-2xl font-bold tracking-tight text-gray-900 sm:text-2xl text-center">Here are our recommendations</h1>

        <ul role="list" class="mt-8 space-y-8 text-gray-600">
            <li class="flex gap-x-3">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              
              <span><strong class="font-semibold text-gray-900">Increase PHP Memory Limit:</strong> The export process may fail if the Memory Limit is lower than required for the process to run smoothly. Increase the memory_limit to 1024 upwards to see if that helps. <a href="https://blog.hubspot.com/website/wordpress-php-memory-limit" target="_blank" class="text-blue-500">Here's</a> a guide on how to increase the memory_limit</span>
            </li>

            <li class="flex gap-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                
                <span><strong class="font-semibold text-gray-900">Try exporting just the database:</strong> It's possible that there are some broken tables or rows in the database, which may be causing the export process to fail. Try to export just the database the see if export works. If it fails, then you may need to optimize/clean the database and try to export again.</span>
              </li>

              <li class="flex gap-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                
                <span><strong class="font-semibold text-gray-900">If export fails in the "Exporting Database" step:</strong> If the export process get's stuck or fails when it gets to the "Exporting Database" step, this may be an issue with the server permissions or configuration. Check to see if there are any server firewall that may be blocking the process. Also check to verify that the current databse user has the right permissions. The hosting support may also be able to help in this regard.</span>
              </li>

              <li class="flex gap-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                
                <span><strong class="font-semibold text-gray-900">Use our mu-plugin:</strong> You can upload our mu-plugin to the mu-plugins folder in the wp-content directory. In many cases, this fixes the issue. Download the mu-plugin <a href="https://drive.google.com/file/d/1VC9mRAfC2B0MZR_SgyMMP3rrUUHvP1fV/view?usp=sharing" target="_blank" class="text-blue-500">here</a></span>
              </li>

          </ul>


          <p class="mt-6 text-lg leading-8 text-gray-700">If you are still unable to identify the source of the problem, our support team will come to the rescue. You can reach us at <a href="mailto:support@servmask.com" target="_blank" class="text-blue-500">support@servmask.com.</a> </p>
      </div>

      <div class="flex justify-center items-center mt-8">

        <button wire:click="$emit('goToStep', 1)">Go Back</button>
      </div>


</div>