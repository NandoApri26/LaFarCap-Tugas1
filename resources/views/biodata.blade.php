<div class="container mx-auto mt-20 mb-20 max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="rounded-t-lg w-[350px] object-cover" src="img/{{$user['image']}}" alt="" />
    </a>
    <div class="m-5"> 
            <h5 class="mb-2 text-base font-bold tracking-tight text-gray-900 dark:text-white">{{$user['nama']}}</h5>
            <h5 class="mb-2 text-base font-bold tracking-tight text-gray-900 dark:text-white">{{$user['email']}}</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$user['alamat']}}</p>
    </div>
</div>