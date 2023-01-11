
<x-layouts.app 
    title="Blog" 
        metaDescription="Blog meta description"
        
        >
      
        
            <h1>Blog</h1>
            
            @foreach ($posts as $posts)
               <h2> {{$posts['title']}} </h2> 
            @endforeach
</x-layouts.app>