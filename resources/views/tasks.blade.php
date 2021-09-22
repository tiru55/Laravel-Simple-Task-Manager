<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tasks') }}
        </h2>
    </x-slot>
    <div class="flex flex-col my-2 px-2 py-2">
      <div class="flex justify-end rounded  px-2 py-2">
        <div class="grid grid-cols-1 mr-2">
          <button class="bg-white text-blue-500 font-bold py-2 px-4 rounded-3xl  inline-flex items-center shadow" onclick="switchVisible()">
            <ion-icon name="apps" class="text-xl"></ion-icon><span class="ml-2">Card View</span>
          </button>
        </div>
        <div class="grid grid-cols-1">
        <button class="bg-green-500 text-white font-bold py-2 px-4 rounded-full inline-flex items-center" onclick="window.location='{{ url("add_task") }}' ">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <span class="ml-2">Add Task</span>
        </button>
      </div>
      </div>
      <div class="my-3 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8" id="tableview">
          <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-indigo-400 text-white">
                <tr>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Id</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Title</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Status</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Priority</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Created</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Actions</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($tasks as $task )
                
                <tr class="hover:bg-blue-50">
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-600">{{$task->id}}</div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                      <div class="ml-0">
                        <div class="text-sm font-medium text-gray-600">{{$task->task_title}}</div>
                      </div>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    @if ($task->task_status == 'New')
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-300 text-white"> {{ $task->task_status}} </span>
                    @elseif ($task->task_status == 'In Progress')
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-300 text-white"> {{ $task->task_status}} </span>
                    @elseif ($task->task_status == 'On Hold')
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-300 text-white"> {{ $task->task_status}} </span>
                    @else
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-300 text-white"> {{ $task->task_status}} </span>
                    @endif
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-600">{{$task->task_priority}}</div>
                  </td>
                  
                  <td class="px-6 py-4 whitespace-nowrap  text-gray-500 text-md">{{$task->created_at->diffForHumans();}}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                    <a href="tasks/{{ $task->id }}/edit" class="text-indigo-600 hover:text-indigo-900"><ion-icon name="create-outline"></ion-icon></a>
                    <a href="tasks/{{ $task->id }}/delete" class="text-indigo-600 hover:text-indigo-900 ml-2"><ion-icon name="trash-outline"></ion-icon></a>
                  </td>
                </tr>
    
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    
      <div class="container" id="cardview">
        {{-- @foreach($tasks as $task)
        <div class="max-w-md py-3 px-3 bg-white shadow-lg rounded-lg mx-3 mb-3">
          <div>
            <h2 class="text-gray-800 text-lg font-semibold">{{$task->task_title}}</h2>
            <p class="mt-2 text-gray-600">{{$task->task_description}}</p>
          </div>
          <div class="flex justify-between mt-3">
            <div class="mr-3 inline-flex items-center"><span class="text-pink-600">{{$task->created_at->diffForHumans()}}</span></div>
            <div class="inline-flex items-center"><span class="text-green-500">{{$task->task_status}}</span></div>
          </div>
        </div>
        @endforeach --}}

        <div class="flex flex-wrap mx-2">
          @foreach($tasks as $task)
          <div class="px-2 py-2 lg:w-1/3 md:w-1/2">
            <div class="flex rounded-xl h-full bg-white shadow-lg px-4 py-4 flex-col">
              <div class="flex items-center mb-3">  
                <h2 class="text-black text-lg title-font font-medium">{{$task->task_title}}</h2>
              </div>
              <div class="flex-grow">
                <p class="leading-relaxed text-base text-gray-600">{{$task->task_description}}</p>
                <div class="flex justify-between mt-6">
                <p class="text-gray-700 inline-flex items-center mr-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  <span class="ml-2"> {{$task->created_at->format('d M h:m')}}</span>
                </p>
                <span class=" inline-flex items-center leading-none text-sm">
                  @if ($task->task_status == "New")
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.636 18.364a9 9 0 010-12.728m12.728 0a9 9 0 010 12.728m-9.9-2.829a5 5 0 010-7.07m7.072 0a5 5 0 010 7.07M13 12a1 1 0 11-2 0 1 1 0 012 0z" />
                  </svg>
                 <p class="ml-2 text-blue-600"> {{$task->task_status}}</p>
                 @elseif ($task->task_status == "In Progress")
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                 </svg>
                 <p class="ml-2 text-yellow-600"> {{$task->task_status}}</p>
                 @elseif ($task->task_status == "On Hold")
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                 </svg>
                 <p class="ml-2 text-red-600"> {{$task->task_status}}</p>
                 @elseif ($task->task_status == "Closed")
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                 </svg>
                 <p class="ml-2 text-green-600"> {{$task->task_status}}</p>
                 @endif
                
                </span>
              </div>
              </div>
            </div>
          </div>
          @endforeach
      </div>
    
    </x-app-layout>