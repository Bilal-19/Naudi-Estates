@extends('AdminLayout.main')

@section('section')
    <div class="container mx-auto p-5">
        <div class="w-full">
            <table class="min-w-max md:w-full">
                <tr class="border-b text-sm font-medium">
                    <th class="p-3">ID</th>
                    <th class="p-3">Customer Name</th>
                    <th class="p-3">Email</th>
                    <th class="p-3">Message</th>
                    <th class="p-3">Date</th>
                    <th class="p-3">Time</th>
                </tr>

                @foreach ($fetchEnquiries as $record)
                    <tr>
                        <td>{{ $record->id }}</td>
                        <td>{{ $record->username }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
