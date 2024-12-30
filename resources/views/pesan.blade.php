<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Form Pemesanan</title>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto max-w-4xl py-8">
        <div class="mb-4">
            <a href="/" class="bg-[#FF69B4] text-white py-2 px-4 rounded-lg transition duration-200 hover:bg-[#eb1286] w-full">
              Kembali ke Home
            </a>
        </div>
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Form Pemesanan</h2>

        <!-- Menampilkan pesan sukses jika ada -->
        @if (session('success'))
        <div id="success-message" class="bg-green-500 text-white p-4 rounded-md mb-6 shadow-lg">
            {{ session('success') }}
        </div>
        @endif

        <!-- Container untuk dua card -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Card 1: Form Pemesanan -->
            <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        @error('nama')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="noHp" class="block text-sm font-medium text-gray-700">Nomor Handphone</label>
                        <input type="number" id="noHp" name="noHp" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        @error('noHp')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="alamatAcara" class="block text-sm font-medium text-gray-700">Alamat Acara</label>
                        <input type="text" id="alamatAcara" name="alamatAcara" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        @error('alamatAcara')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="tglAcara" class="block text-sm font-medium text-gray-700">Tanggal Acara</label>
                        <input type="text" id="tglAcara" name="tglAcara" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        @error('tglAcara')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="layanan" class="block text-sm font-medium text-gray-700">Layanan</label>
                        <input type="text" id="layanan" name="layanan" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        @error('layanan')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="bg-[#FF69B4] text-white py-2 px-4 rounded-lg transition duration-200 hover:bg-[#eb1286] w-full">Pesan Sekarang</button>
                    </div>
                </form>
            </div>

            <!-- Card 2: Petunjuk Cara Pemesanan -->
            <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Cara Pemesanan</h3>
                <ul class="list-decimal pl-5 space-y-2 text-gray-600">
                    <li>Isi form pemesanan dengan data yang lengkap dan akurat.</li>
                    <li>Pilih layanan yang sesuai dengan kebutuhan acara Anda.</li>
                    <li>Pastikan nomor handphone yang diberikan aktif untuk konfirmasi.</li>
                    <li>Setelah pemesanan selesai, kami akan menghubungi Anda untuk detail lebih lanjut.</li>
                    <li>Jika ada pertanyaan, hubungi kami di nomor yang tertera.</li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        if (document.getElementById("success-message")) {
            setTimeout(function() {
                document.getElementById("success-message").style.display = 'none';
            }, 3000);
        }
    </script>
</body>

</html>