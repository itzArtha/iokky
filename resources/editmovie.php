<?php $data = $fetch->fetch('movies', 'id=' . $_GET['id']); ?>
<section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
    <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Identitas Film</h2>
    <?php foreach ($data as $key => $value) { ?>
    <form action="update.php" method="POST">
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="nama">Nama</label>
                <input id="nama" name="title" value="<?= $value['title'] ?>" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                <input name="id" value="<?= $value['id'] ?>" type="hidden">
            </div>

            <div>
                <label class="text-gray-700 dark:text-gray-200" for="genre">Genre</label>
                <select id="genre" type="text" name="genre" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                <option value="<?= $value['genre'] ?>"><?= $value['genre'] ?></option>
                <option value="Action">Action</option>
                <option value="Adventure">Adventure</option>
                <option value="Comedy">Comedy</option>
                <option value="Horror">Horror</option>
                <option value="Romance">Romance</option>
            </select>
            </div>

            <div>
                <label class="text-gray-700 dark:text-gray-200" for="tahunrilis">Tahun Rilis</label>
                <input id="tahunrilis" name="year" type="text" value="<?= $value['year'] ?>" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
            <label class="text-gray-700 dark:text-gray-200" for="Thumbnail">Thumbnail</label>
                <input type="file" id="myFile" name="thumbnail" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
        </div>

        <div class="flex justify-end mt-6">
            <button type="submit" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
        </div>
    </form>
    <?php } ?>
</section>