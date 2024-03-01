<div>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-8 d-flex justify-content-around">

                <div class="form-check">
                    <input wire:click="filterByProject" class="form-check-input" type="checkbox" value=""
                        id="project">
                    <label class="form-check-label" for="project">
                        Project
                    </label>
                </div>
                <div class="form-check">
                    <input wire:click="filterByEmployee" class="form-check-input" type="checkbox" value=""
                        id="employee">
                    <label class="form-check-label" for="employee">
                        Employee
                    </label>
                </div>
                <div class="form-check">
                    <input wire:click="filterByDate" class="form-check-input" type="checkbox" value=""
                        id="date">
                    <label class="form-check-label" for="date">
                        Date
                    </label>
                </div>
            </div>

        </div>
    </div>
    <input wire:click="print" class="form-check-input" type="checkbox" value="" id="date">
    <label class="form-check-label" for="date">
        print
    </label>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Project</th>
                <th scope="col">Employee</th>
                <th scope="col">Date</th>
                <th scope="col">Hours</th>
            </tr>
        </thead>
        <tbody>
            @if (!$dateChecked && !$projectChecked && !$employeeChecked)
                @foreach ($data as $info)
                    <tr>
                        <td>{{ $info->project->name ?? '' }}</td>
                        <td>{{ $info->employee->name ?? '' }}</td>
                        <td>{{ $info->date ?? '' }}</td>
                        <td>{{ $info->hours }}</td>
                    </tr>
                @endforeach
            @else
                @foreach ($data as $info)
                    <tr>
                        <td>{{ $info->project ?? '' }}</td>
                        <td>{{ $info->employee ?? '' }}</td>
                        <td>{{ $info->date ?? '' }}</td>
                        <td>{{ $info->hours }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
