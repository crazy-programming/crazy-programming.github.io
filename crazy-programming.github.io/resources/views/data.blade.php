@foreach($posts as $post)
<div class="card mb-3">
    <div class="card-header">
        <h4>{{\Illuminate\Support\Str::limit($post->title, 12)}}</h4>

    </div>
    <div class="card-body">
        <p>{{\Illuminate\Support\Str::limit($post->description, 100)}}</p>
    
    
        <div class="text-right">
            <a href="/social-media-share/{{$post->id}}">Read More</a>
        </div>
    
    
    </div>
</div>
{{-- <div class="card">
    <div class="card-header">
      Featured
    </div>
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div> --}}
@endforeach