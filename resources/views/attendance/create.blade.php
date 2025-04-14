@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Record Attendance</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('attendance.store') }}">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ old('date', date('Y-m-d')) }}" required>
                            @error('date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        @foreach($classes as $class)
                            <div class="card mb-4">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0">{{ $class->name }}</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Student Name</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($class->students as $student)
                                                    <tr>
                                                        <td>{{ $student->firstname }} {{ $student->lastname }}</td>
                                                        <td>
                                                            <select class="form-select" name="attendances[{{ $student->id }}][status]" required>
                                                                <option value="present">Present</option>
                                                                <option value="absent">Absent</option>
                                                                <option value="late">Late</option>
                                                            </select>
                                                            <input type="hidden" name="attendances[{{ $student->id }}][student_id]" value="{{ $student->id }}">
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('attendance.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary">Record Attendance</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 