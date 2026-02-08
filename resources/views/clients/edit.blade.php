<x-app-layout>
    <div class="p-6 mt-4 flex flex-col w-[90%] mx-auto h-full text-slate-300  rounded-lg bg-clip-border">
        <main class="w-full text-left table-auto min-w-max">
            <form>
                <div>
                    <label class="p-4 border-b border-slate-600 bg-slate-700">
                        <p class="text-sm font-normal leading-none text-slate-300">
                            Name
                        </p>
                    </label>
                    <h3 class="p-4 border-b border-slate-700">
                        <input type="text" value="{{$client->name}}"  class="text-sm text-slate-100 font-semibold" />
                    </h3>
                    <label for="email" class="p-4 border-b border-slate-600 bg-slate-700">
                        <p class="text-sm font-normal leading-none text-slate-300">
                            Email
                        </p>
                    </label>
                    <h3 class="p-4 border-b border-slate-700">
                        <input type="email" value="{{$client->email}}" name="email" id="email" class="text-sm text-slate-100 font-semibold" />
                    </h3>
                    <label for="phone" class="p-4 border-b border-slate-600 bg-slate-700">
                        <p class="text-sm font-normal leading-none text-slate-300">
                            Phone
                        </p>
                    </label>
                    <h3 class="p-4 border-b border-slate-700">
                        <input type="text" value="{{$client->phone}}" id="phone" name="phone" class="text-sm text-slate-100 font-semibold" />
                    </h3>
                    <label class="p-4 border-b border-slate-600 bg-slate-700">
                        <p class="text-sm font-normal leading-none text-slate-300">
                            Company
                        </p>
                    </label>
                    <h3 class="p-4 border-b border-slate-700">
                        <input type="text" id="company"  name='company' value="{{$client->company}}"  class="text-sm bg-transparent text-slate-100 font-semibold" />
                    </h3>
                </div>
            </form>
        </main>
        <br>
        <h3 class="p-4 border-slate-700">
            <p class="text-sm text-slate-300">
                <a class="bg-blue-500 px-6 rounded-sm py-2 font-bold" href="/client/{{$client->id}}/edit">Edit {{$client->name}} </a>
            </p>
        </h3>
        <br>
    </div>
    <br>
</x-app-layout>
