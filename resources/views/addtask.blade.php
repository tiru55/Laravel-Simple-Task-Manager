<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Task') }}
        </h2>
    </x-slot>
    <div class="container sm:container sm:mx-auto md:container md:mx-auto lg:container lg:mx-auto my-3 px-3 py-3">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="/save_task" method="POST">
             @csrf
                <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                  <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                      <label for="task_title" class="block text-sm font-medium text-gray-700">Title</label>
                      <input type="text" name="task_title" id="task_title" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
      
                    <div class="col-span-6 sm:col-span-3">
                       <label for="task_status" class="block text-sm font-medium text-gray-700">Status</label>
                      <select id="task_status" name="task_status" autocomplete="task_status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option default value="New">New</option>
                        <option value="In Progress">In Progress</option>
                        <option value="On Hold">On Hold</option>
                      </select>
                    </div>
      
                    <div class="col-span-12 sm:col-span-6">
                      <label for="task_description" class="block text-sm font-medium text-gray-700">Description</label>
                      <textarea  name="task_description" id="task_desctiption" required="" autocomplete="task_desctiption" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" rows="5"></textarea>
                    </div>
      
                    <div class="col-span-6 sm:col-span-3">
                      <label for="task_priority" class="block text-sm font-medium text-gray-700">Priority</label>
                      <select id="task_priority" name="task_priority" autocomplete="task_priority" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option default value="None"> - </option> 
                        <option  value="Low">Low</option>
                        <option value="Medium">Medium</option>
                        <option value="High">High</option>
                      </select>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="task_due_date" class="block text-sm font-medium text-gray-700">Due Date</label>
                        <input type="datetime-local" name="task_due_date" id="task_due_date" autocomplete="task_due_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>
      
                    <div class="col-span-6 sm:col-span-3">
                      <label for="task_type" class="block text-sm font-medium text-gray-700">Task Type</label>
                      <select id="task_type" name="task_type" autocomplete="task_type" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="OS">OS</option>
                        <option value="Hardware">Hardware</option>
                        <option value="GSuite">GSuite</option>
                        <option value="Zoho">Zoho</option>
                        <option value="Payments">Payments</option>
                        <option value="Invoices">Invoices</option>
                        <option value="Quotaions">Quotaions</option>
                        <option value="Application Access">Application Access</option>
                        <option value="Laptop Requests">Laptop Requests</option>
                        <option value="Laptop Accessory Requests">Laptop Accessory Requests</option>
                        <option value="Others">Others</option>
                      </select>
                    </div>
                    <input type="hidden" name="task_owner" id="task_owner" value="{{Auth::user()->first_name}}" /> 
                  </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                  <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Save
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
    </div>
</x-app-layout>