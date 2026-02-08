<x-app-layout>
    <div class="p-6 mt-4 flex flex-col w-[90%] mx-auto h-full text-slate-300 shadow-md rounded-lg bg-clip-border">
        <table class="w-full text-left table-auto min-w-max">
            <thead>
            <tr>
                <th class="p-4 border-b border-slate-600 bg-slate-700">
                    <p class="text-sm font-normal leading-none text-slate-300">
                       Name
                    </p>
                </th>
                <th class="p-4 border-b border-slate-600 bg-slate-700">
                    <p class="text-sm font-normal leading-none text-slate-300">
                        Email
                    </p>
                </th>
                <th class="p-4 border-b border-slate-600 bg-slate-700">
                    <p class="text-sm font-normal leading-none text-slate-300">
                        Phone
                    </p>
                </th>
                <th class="p-4 border-b border-slate-600 bg-slate-700">
                    <p class="text-sm font-normal leading-none text-slate-300">
                        Company
                    </p>
                </th>
                <th class="p-4 border-b border-slate-600 bg-slate-700">
                    <p class="text-sm font-normal leading-none text-slate-300">
                        Details
                    </p>
                </th>
            </tr>
            </thead>
            <tbody>
            @forelse($clients as $client)
                <tr class="even:bg-slate-900 hover:bg-slate-700">
                    <td class="p-4 border-b border-slate-700">
                        <p class="text-sm text-slate-100 font-semibold">
                            {{$client->name}}
                        </p>
                    </td>
                    <td class="p-4 border-b border-slate-700">
                        <p class="text-sm text-slate-300">
                            {{$client->email}}
                        </p>
                    </td>
                    <td class="p-4 border-b border-slate-700">
                        <p class="text-sm text-slate-300">
                            {{$client->phone}}
                        </p>
                    </td>
                    <td class="p-4 border-b border-slate-700">
                        <p class="text-sm text-slate-300">
                            {{$client->company}}
                        </p>
                    </td>
                    <td class="p-4 border-b border-slate-700">
                        <p class="text-sm text-slate-300">
                            <a class="bg-blue-500 px-3 rounded-xl py-1 font-bold" href="/client/{{$client->id}}">View</a>
                        </p>
                    </td>
                </tr>
                @empty
                <p>No clients</p>
            @endforelse
            </tbody>
        </table>
        <br>
        <div>
            {{$clients->links()}}
        </div>
    </div>
    <br>

</x-app-layout>
