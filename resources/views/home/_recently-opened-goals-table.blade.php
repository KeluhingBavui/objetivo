@php use Carbon\Carbon;
@endphp

<table class="table table-borderless datatable">
    <thead>
        <tr>
            <th scope="col">Goal Title</th>
            <th scope="col">Target Date</th>
            <th scope="col">Mentor</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($goals as $goal)
            <!-- Goal -->
            <tr>
                <td>
                    <a href="{{ route('goal.show', [$goal->id]) }}" class="text-primary">
                        {{-- <a href="{{ url('/goal/'.$goal->id) }}" class="text-primary"> --}}
                        {{ $goal->title }}
                </td>
                <td>
                    @php
                        $dueAt = Carbon::parse($goal->due_at);
                    @endphp
                    {{ $dueAt->toFormattedDateString() }}</td>
                <td>{{ $goal->name }}</td>
                <td>
                    @if ($goal->g_status === 'in_progress')
                        <span class="badge bg-warning">In Progress</span>
                    @elseif ($goal->g_status === 'completed')
                        <span class="badge bg-success">Completed</span>
                    @else
                        <span class="badge bg-danger">Not Started</span>
                    @endif
                </td>
            </tr>
            <!-- End Goal -->
        @endforeach
    </tbody>
</table>
