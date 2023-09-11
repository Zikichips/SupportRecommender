<div class="py-28">
  <div class="lg:max-w-4xl mx-auto">
    <h2 class="mt-2 text-xl font-semibold tracking-tight text-blue-500 sm:text-xl text-center">Out of Disk Space</h2>
      <h1 class="mt-2 text-2xl font-bold tracking-tight text-gray-900 sm:text-2xl text-center">Here are our recommendations</h1>
        <ul role="list" class="mt-8 space-y-8 text-gray-600">
            <li class="flex gap-x-3">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              
              <span><strong class="font-semibold text-gray-900">Disk Quote Exceeded:</strong> You will have to ask your hosting providers to help in this regard. You may need to increase your disk quota</span>
            </li>

            <li class="flex gap-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                
                <span><strong class="font-semibold text-gray-900">Clear out files to get more space:</strong> You can delete the Cache files that may have been saved. If you also have backup folders of other backup plugins, try to delete the backups to get more space.</span>
              </li>

              <li class="flex gap-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                
                <span><strong class="font-semibold text-gray-900">Contact Your Hosting:</strong> Some hosting providers place a file size restriction (e.g 2GB limit). Contact them to see if this limit can be increased.</span>
              </li>

          </ul>


          <p class="mt-6 text-lg leading-8 text-gray-700">If you are still unable to identify the source of the problem, our support team will come to the rescue. You can reach us at <a href="mailto:support@servmask.com" target="_blank" class="text-blue-500">support@servmask.com.</a> </p>
      </div>

      <div class="flex justify-center items-center mt-8">

        <button wire:click="$emit('goToStep', 1)">Go Back</button>
      </div>


</div>