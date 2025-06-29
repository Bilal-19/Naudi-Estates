@extends('AdminLayout.main')

@section('section')
    <div class="container mx-auto p-5">
        <div class="w-full mb-10">
            <h2 class="text-center text-lg md:text-3xl font-light">Customer <span class="font-medium text-[#C9A578]">Enquiries</span></h2>
        </div>
        <div class="w-full overflow-x-auto">
            <table class="min-w-max md:w-full">
                <tr class="border-b text-sm font-medium">
                    <th class="p-1">ID</th>
                    <th class="p-1">Name</th>
                    <th class="p-1">Email</th>
                    <th class="p-1">Message</th>
                    <th class="p-1">Date & Time</th>
                </tr>

                @foreach ($fetchEnquiries as $record)
                    <tr class="border-b text-sm md:text-md font-light">
                        <td class="p-3">{{ $record->id }}</td>
                        <td class="p-3">{{ $record->username }}</td>
                        <td class="p-3">{{ $record->useremail }}</td>
                        <td class="p-3">{{ $record->usermessage }}</td>
                        <td class="p-3">{{ date('d M Y | h:i:sa', strtotime($record->created_at)) }}</td>
                    </tr>
                @endforeach
            </table>
            <p class="my-4">{{$fetchEnquiries}}</p>
        </div>
    </div>
@endsection
