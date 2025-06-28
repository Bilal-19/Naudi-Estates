@extends('AdminLayout.main')

@section('section')
    <div class="container mx-auto p-5">
        <div class="w-full mb-10">
            <h2 class="text-center text-lg md:text-3xl font-light">Customer <span class="font-medium text-[#C9A578]">Testimonials</span>
            </h2>
        </div>
        <div class="w-full overflow-x-auto">
            <table class="min-w-max md:w-full">
                <tr class="border-b text-sm font-medium">
                    <th class="p-3">ID</th>
                    <th class="p-3">Name</th>
                    <th class="p-3">Rating</th>
                    <th class="p-3">Message</th>
                    <th class="p-3">Visibility</th>
                    <th class="p-3">Date & Time</th>
                </tr>

                @foreach ($fetchTestimonials as $record)
                    <tr class="border-b text-base md:text-md font-light">
                        <td class="p-4">{{ $record->id }}</td>
                        <td class="p-4">{{ $record->username }}</td>
                        <td class="p-4">{{ $record->rating }}</td>
                        <td class="p-4">{{ $record->message }}</td>
                        <td class="p-4 text-center">
                            <a href="{{route('ToggleVisibility',['id'=>$record->id])}}">
                                @if ($record->visibility === 'no')
                                    <i class="fa-solid fa-eye-slash"></i>
                                @else
                                    <i class="fa-solid fa-eye"></i>
                                @endif
                            </a>

                        </td>
                        <td class="p-4">{{ date('d M Y h:i:sa', strtotime($record->created_at)) }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
