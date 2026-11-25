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
            <!-- content loop -->
        </table>
    @endif
</x-layout>