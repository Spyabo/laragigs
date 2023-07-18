@if(session()->has('form_success'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show" class="bg-green-100 border border-green-400 text-green-700 px-4 py-4 my-3 rounded">
        <p>{{ session()->get('message') }}</p>
    </div>
@endif