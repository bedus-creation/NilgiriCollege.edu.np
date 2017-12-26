@if(count($data)>0)
<table class="table table-striped">
    <thead >
        <tr>
            <th>Date</th>
            <th>page Title</th>
            <th >publish</th>
            <th >edit</th>
            <th>delete</th>
        </tr>
    </thead>

    <tbody>
        @foreach($data as $item)
        <tr>
            <td>{{ $item->created_at }}</td>
            <td>{{ str_slug($item->title,' ')}} </td>
            <td class="publish"><button id="edit-id-{{ $item->id}}" onclick="publish({{ $item->id }});" class="btn btn-primary" > {{ $publish=($item->publish==0)? "publish" : "Unpublish" }}</button></td>
            <td class="edit"><a href="{{URL('/admin/edit-post/')."/".$item->title}}">Edit</a></td>
            <td class="delete" id="del-id-{{ $item->id}}"><button onclick="del({{ $item->id }});" class="btn btn-danger delete">Delete</button></td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<h1>You have not create a single post !</h1>
@endif