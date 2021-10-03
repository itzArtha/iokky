<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <!--Tombol Tambah Data-->
        <a href="?page=addmovie" class="mb-4 h-auto px-6 py-2 text-lg text-green-100 transition-colors duration-150 bg-green-700 rounded-lg focus:shadow-outline hover:bg-green-800">Add Movie</a>
        <!--Tombol Tambah Data-->
        <div class="grid gap-3 my-4 lg:grid-cols-6 sm:max-w-sm sm:mx-auto lg:max-w-full">
          <?php foreach ($fetch->fetch('movies', 'id') as $key => $value) { ?>
          <div class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-sm">
            <img src="<?= $value['thumbnail'] ?>" class="object-cover w-full h-64" alt="" />
            <div class="p-5 border border-t-0">
              <p class="mb-3 text-xs font-semibold tracking-wide uppercase">
                <a href="/" class="transition-colors duration-200 text-blue-gray-900 hover:text-deep-purple-accent-700" aria-label="Category" title="Action"><?= $value['genre'] ?></a>
                <br>
                <span class="text-gray-600"><?= $value['year'] ?></span>
              </p>
              <a href="/" aria-label="Category" title="Shang-Chi and the Legend of the Ten Rings" class="inline-block mb-3 text-xl font-bold leading-5 transition-colors duration-200 hover:text-deep-purple-accent-700"><?= $value['title'] ?></a>
              <!--Tombol Edit-->
              <button class="w-full h-auto px-6 my-1 text-lg text-gray-100 transition-colors duration-150 bg-gray-700 rounded-lg focus:shadow-outline hover:bg-gray-800"><a href="?page=editmovie&id=<?= $value['id'] ?>">Edit</a></button>
              <!--Tombol Delete-->
              <button class="w-full h-auto px-6 my-1 text-lg text-red-100 transition-colors duration-150 bg-red-700 rounded-lg focus:shadow-outline hover:bg-red-800"><a href="delete.php?id=<?= $value['id'] ?>">Delete</a></button>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>