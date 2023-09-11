<div class="py-28">
  <div class="lg:max-w-4xl mx-auto">
    <h2 class="mt-2 text-xl font-semibold tracking-tight text-blue-500 sm:text-xl text-center">'Refresh the page and try again' error</h2>
      <h1 class="mt-2 text-2xl font-bold tracking-tight text-gray-900 sm:text-2xl text-center">Here are our recommendations</h1>

        <ul role="list" class="mt-8 space-y-8 text-gray-600">
            <li class="flex gap-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                
                <span><strong class="font-semibold text-gray-900">Fix File Permission issue:</strong> You need to ensure that the folders and files inside the "wp-content" directory have the right permissions. For folders, the permission should be 775. For files, the permission should be 664. You can read more about setting file permissions  <a href="https://help.servmask.com/knowledgebase/invalid-file-permissions/" target="_blank" class="text-blue-500">here</a> </span>
              </li>

              <li class="flex gap-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                
                <span><strong class="font-semibold text-gray-900">Fix Owner Permission issue:</strong> If you manage your own server, you can update the owner permissions through the Terminal or by contacting your hosting support. For standard hosting, you can set the right permissions by running this console commane: <code> sudo chown -R www-data:www-data wp-content</code><br> If you are using Bitnami, you can check out their guide <a href="https://docs.bitnami.com/virtual-machine/apps/wordpress-pro/administration/understand-file-permissions/" target="_blank" class="text-blue-500">here</a></span>
              </li>

            <li class="flex gap-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                
                <span><strong class="font-semibold text-gray-900">Check Firewall settings:</strong> If you have any Firewall plugins(e.g Better-WP Security Plugin), deactivate them to see if that helps. Also, check to see if some server PHP security modules such as <code>mod_evasive</code> and <code>mod_security</code> are enabled. If enabled, deactivate them and try again</span>
              </li>

              <li class="flex gap-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                
                <span><strong class="font-semibold text-gray-900">Try to export backups in Chunks:</strong> For example, export just the Themes, or Plugins, or Media, or Database. See if some work and some fail. This can help you determine where the issue is coming from. Depending on which chunk of backup fails, you can know how to fix it.</span>
              </li>

          </ul>


          <p class="mt-6 text-lg leading-8 text-gray-700">If you are still unable to identify the source of the problem, our support team will come to the rescue. You can reach us at <a href="mailto:support@servmask.com" target="_blank" class="text-blue-500">support@servmask.com.</a> </p>
      </div>

      <div class="flex justify-center items-center mt-8">

        <button wire:click="$emit('goToStep', 1)">Go Back</button>
      </div>


</div>