<x-layout>
    <x-slot:title>
        Tags
    </x-slot>

    @if(count($tags) > 0)
        <table>
            <tr>
                <th>tag id</th>
                <th>name</th>
            </tr>
            @foreach($tags as $tag)
                <tr>
                    <td>{{$tag->id}}</td>
                    <td>{{$tag->name}}</td>
                </tr>
            @endforeach
        </table>
    @endif
</x-layout>