<x-app-layout>
<x-slot name="header">
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{ __('Profile') }}
</h2>
</x-slot>
  <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1 flex justify-between">
        <div class="px-4 sm:px-0">
            <h3 class="text-lg font-medium text-gray-900">Profile Information</h3>
    
            <p class="mt-1 text-sm text-gray-600">
                Update your account's profile information and email address.
            </p>
        </div>
    
        <div class="px-4 sm:px-0">
            
        </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form method="POST" action="update_profile">
        @csrf
        @method('PUT')
          <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
              <div class="grid grid-cols-6 gap-6">
                  <!-- Profile Photo -->
                  <div class="col-span-6 sm:col-span-4">
              
              <label class="block font-medium text-sm text-gray-700" for="photo">
  Avatar
</label>

              <!-- Current Profile Photo -->
              <div class="mt-2" photoPreview">
                  <img src="https://ui-avatars.com/api/?name={{Auth::user()->first_name}}+{{Auth::user()->last_name}}&amp;color=7F9CF5&amp;background=EBF4FF" alt="Tirumaleswara" class="rounded-full h-20 w-20 object-cover">
              </div>

              <!-- New Profile Photo Preview -->
              <div class="mt-2" style="display: none;">
                  <span class="block rounded-full w-20 h-20" >
                  </span>
              </div>
                          </div>
      
      <!-- First Name -->
      <div class="col-span-6 sm:col-span-3">
          <label class="block font-medium text-sm text-gray-700" for="first_name">
  First Name
</label>
          <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="first_name" type="text" name="first_name"  autocomplete="first_name" value="{{Auth::user()->first_name}}">
                  </div>

      <!-- Last Name -->
      <div class="col-span-6 sm:col-span-3">
          <label class="block font-medium text-sm text-gray-700" for="last_name">
  Last Name
</label>
          <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="last_name" type="text" name="last_name" value="{{Auth::user()->last_name}}">
                  </div>

                     <!-- Employee  Id -->
      <div class="col-span-6 sm:col-span-3">
        <label class="block font-medium text-sm text-gray-700" for="employee_id" >
Employee Id
</label>
        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="employee_id" type="number" name="employee_id" value="{{Auth::user()->employee_id}}">
                </div>
                  <!-- Designation -->
                  <div class="col-span-6 sm:col-span-3">
                    <label class="block font-medium text-sm text-gray-700" for="designation">
            Designation
            </label>
                    <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="designation" type="text" name="designation" value="{{Auth::user()->designation}}">
                            </div>
                             <!-- Department -->
                  <div class="col-span-6 sm:col-span-3">
                    <label class="block font-medium text-sm text-gray-700" for="department">
            Department
            </label>
                    <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="department" type="text" name="department"  value="{{Auth::user()->department}}"">
                            </div>
                                 <!-- Phone Number -->
                  <div class="col-span-6 sm:col-span-3">
                    <label class="block font-medium text-sm text-gray-700" for="phone">
            Phone
            </label>
                    <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="phone" type="tel" name="phone" value="{{Auth::user()->phone}}">
                            </div>
                                                <!-- City -->
                  <div class="col-span-6 sm:col-span-3">
                    <label class="block font-medium text-sm text-gray-700" for="city">
            City
            </label>
                    <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="city" type="text" name="city" value="{{Auth::user()->city}}">
                            </div>
                                                      <!-- Country -->
                  <div class="col-span-6 sm:col-span-3">
                    <label class="block font-medium text-sm text-gray-700" for="country">
            Country
            </label>
                    <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="country" type="text" name="country" value="{{Auth::user()->country}}">
                            </div>

              </div>
          </div>

                          <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
          

      <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
  Save
</button>
              </div>
                  </form>
            
  </div>
  
    
  </div>
  <div class="hidden sm:block">
    <div class="py-8">
        <div class="border-t border-gray-200"></div>
    </div>
</div>
<div class="mt-10 sm:mt-0">
  <div wire:id="4uIcdRAS4h2gUwlSsfkl" class="md:grid md:grid-cols-3 md:gap-6">
<div class="md:col-span-1 flex justify-between">
<div class="px-4 sm:px-0">
<h3 class="text-lg font-medium text-gray-900">Update Password</h3>

<p class="mt-1 text-sm text-gray-600">
Ensure your account is using a long, random password to stay secure.
</p>
</div>

<div class="px-4 sm:px-0">

</div>
</div>

<div class="mt-5 md:mt-0 md:col-span-2">
<form method="POST" action="">
<div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
<div class="grid grid-cols-6 gap-6">
  <div class="col-span-6 sm:col-span-4">
<label class="block font-medium text-sm text-gray-700" for="current_password">
Current Password
</label>
<input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="current_password" type="password" wire:model.defer="state.current_password" autocomplete="current-password">
  </div>

<div class="col-span-6 sm:col-span-4">
<label class="block font-medium text-sm text-gray-700" for="password">
New Password
</label>
<input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="password" type="password" wire:model.defer="state.password" autocomplete="new-password">
  </div>

<div class="col-span-6 sm:col-span-4">
<label class="block font-medium text-sm text-gray-700" for="password_confirmation">
Confirm Password
</label>
<input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="password_confirmation" type="password" autocomplete="new-password">
  </div>
</div>
</div>

          <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
  <div  style="display: none;" class="text-sm text-gray-600 mr-3">
Saved.
</div>

<button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
Save
</button>
</div>
</form>
</div>
</div>
</div>

  </div>
</x-app-layout>
