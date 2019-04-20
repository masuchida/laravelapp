@extends('layouts.app')

@section('content')

    <!-- Bootstrapの定形コード… -->

    <div class="panel-body">
        <!-- バリデーションエラーの表示 -->
{{--    @include('common.errors')--}}

    <!-- 新タスクフォーム -->
        <form action="/task" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- タスク名 -->
            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Regist Form</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <!-- タスク追加ボタン -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Task
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- 現在のタスク -->
    <div class="form-group">
        <label for="task-name" class="col-sm-3 control-label">Current Tasks</label>
        <div class="col-sm-6">
            @foreach($user->tasks as $task)
                <p>{{$task->id}} : {{ $task->name }}</p>
            @endforeach
        </div>
    </div>

@endsection