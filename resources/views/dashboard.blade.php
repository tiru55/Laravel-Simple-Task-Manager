<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Test') }}
      </h2>
  </x-slot>


<!-- component -->
<div class=" bg-gray-100 flex items-center justify-center">
  <div class="max-w-7xl w-full mx-auto py-6 px-2">
      <div class="flex flex-col lg:flex-row w-full lg:space-x-2 space-y-2 lg:space-y-0 mb-2 lg:mb-4">
          <div class="w-full lg:w-1/5">
              <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-purple-400">
                  <div class="flex items-center">
                      <div class="icon w-14 p-3.5 bg-purple-400 text-white rounded-full mr-3">
                          <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                          </svg>
                      </div>
                      <div class="flex flex-col justify-center">
                          <div class="text-xl counter">{{ $total_tasks->count()}}</div>
                          <div class="text-sm text-gray-400">Total</div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="w-full lg:w-1/5">
              <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-blue-400">
                  <div class="flex items-center">
                      <div class="icon w-14 p-3.5 bg-blue-400 text-white rounded-full mr-3">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                      </div>
                      <div class="flex flex-col justify-center">
                          <div class="text-xl counter">{{ $total_tasks->where('task_status','=','New')->count() }}</div>
                          <div class="text-sm text-gray-400">New</div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="w-full lg:w-1/5">
              <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-yellow-400">
                  <div class="flex items-center">
                      <div class="icon w-14 p-3.5 bg-yellow-400 text-white rounded-full mr-3">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                      </div>
                      <div class="flex flex-col justify-center">
                          <div class="text-xl counter">{{ $total_tasks->where('task_status','=','In Progress')->count() }}</div>
                          <div class="text-sm text-gray-400">In Progress</div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="w-full lg:w-1/5">
              <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-red-400">
                  <div class="flex items-center">
                      <div class="icon w-14 p-3.5 bg-red-400 text-white rounded-full mr-3">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                      </div>
                      <div class="flex flex-col justify-center">
                          <div class="text-xl counter">{{ $total_tasks->where('task_status','=','On Hold')->count() }}</div>
                          <div class="text-sm text-gray-400">On Hold</div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="w-full lg:w-1/5">
              <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-green-400">
                  <div class="flex items-center">
                      <div class="icon w-14 p-3.5 bg-green-400 text-white rounded-full mr-3">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                      </div>
                      <div class="flex flex-col justify-center">
                          <div class="text-xl counter">{{ $total_tasks->where('task_status','=','Closed')->count() }}</div>
                          <div class="text-sm text-gray-400">Closed</div>
                      </div>
                  </div>
              </div>
          </div>

      </div>
  </div>
  
</div>


</div>
</x-app-layout>