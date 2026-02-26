<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Activity Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', cursive; background-color: #f0f7ff; }
        input, textarea { font-family: 'Kanit', cursive; }
        /* ซ่อนไอคอนปฏิทินแบบเดิมเพื่อความสวยงาม (บาง Browser) */
        input[type="date"]::-webkit-calendar-picker-indicator {
            cursor: pointer;
            filter: invert(0.5) sepia(1) saturate(5) hue-rotate(175deg);
        }
    </style>
</head>
<body class="py-12 px-4">
    <header class="max-w-6xl mx-auto px-6 py-8 flex flex-col md:flex-row justify-between items-center gap-6">
        <div class="flex items-center gap-3">
            <div class="bg-blue-900 p-2 rounded-xl shadow-lg">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
            </div>
            <div class="text-blue-900 font-extrabold text-2xl tracking-tight uppercase">Fast Camp</div>
        </div>
        
        <nav class="flex gap-8 text-slate-600 font-medium bg-white/50 backdrop-blur-sm px-8 py-3 rounded-full shadow-sm border border-white">
            <a href="#" class="hover:text-blue-600 transition-colors">หน้าหลัก</a>
            <a href="#" class="hover:text-blue-600 transition-colors">กิจกรรมของฉัน</a>
            <a href="#" class="hover:text-blue-600 transition-colors border-b-2 border-blue-600 pb-1 text-blue-600">การลงทะเบียน</a>
            <a href="#" class="hover:text-blue-600 transition-colors">โปรไฟล์</a>
        </nav>

        <div class="flex items-center gap-3 bg-blue-50 border border-blue-100 pl-4 pr-1.5 py-1.5 rounded-full shadow-sm">
            <span class="font-bold text-blue-900">โมโม่888</span>
            <div class="w-10 h-10 bg-blue-400 rounded-full border-2 border-white flex items-center justify-center overflow-hidden">
                <img src="https://i.pravatar.cc/100?u=momo" alt="user">
            </div>
        </div>
    </header>
    <div class="max-w-3xl mx-auto">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-extrabold text-slate-800 tracking-tight">
                สร้างกิจกรรมใหม่
            </h1>
        </div>

        <div class="bg-white rounded-[40px] shadow-2xl overflow-hidden border border-blue-100">
            <div class="h-4 bg-gradient-to-r from-blue-400 to-blue-600"></div>
            
            <form action="#" method="POST" enctype="multipart/form-data" class="p-10">
                
                <div class="mb-8">
                    <label class="block text-[#1e3a8a] text-2xl mb-3 font-semibold">หน้าปกกิจกรรม</label>
                    <div class="relative w-full h-72 bg-blue-50 border-4 border-dashed border-blue-200 rounded-[30px] flex items-center justify-center group hover:bg-blue-100 hover:border-blue-400 transition-all duration-300 overflow-hidden">
                        <input type="file" name="cover_image" class="absolute inset-0 opacity-0 cursor-pointer z-10" />
                        <div class="text-center">
                            <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mx-auto mb-3 shadow-md group-hover:scale-110 transition-transform">
                                <span class="text-5xl text-blue-400">+</span>
                            </div>
                            <p class="text-blue-500 text-lg">คลิกเพื่ออัปโหลดหน้าปก</p>
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block text-[#1e3a8a] text-2xl mb-2 font-semibold">ชื่อกิจกรรม</label>
                    <input type="text" name="activity_name" placeholder="ระบุชื่อกิจกรรมที่นี่..." 
                           class="w-full bg-gray-50 border-2 border-blue-100 rounded-2xl p-4 text-xl outline-none focus:border-blue-400 focus:bg-white transition-all shadow-inner">
                </div>

                <div class="mb-6">
                    <label class="block text-[#1e3a8a] text-2xl mb-2 font-semibold">รายละเอียดกิจกรรม</label>
                    <textarea name="details" rows="4" placeholder="อธิบายกิจกรรมของคุณสั้นๆ..." 
                              class="w-full bg-gray-50 border-2 border-blue-100 rounded-2xl p-4 text-xl outline-none focus:border-blue-400 focus:bg-white transition-all shadow-inner resize-none"></textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div class="flex flex-col gap-2">
                        <label class="text-[#1e3a8a] text-2xl font-semibold">วันที่เริ่มกิจกรรม</label>
                        <input type="date" name="start_date" 
                               class="w-full bg-gray-50 border-2 border-blue-100 rounded-2xl p-3 text-xl outline-none focus:border-blue-400 focus:bg-white transition-all">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-[#1e3a8a] text-2xl font-semibold">วันที่สิ้นสุดกิจกรรม</label>
                        <input type="date" name="end_date" 
                               class="w-full bg-gray-50 border-2 border-blue-100 rounded-2xl p-3 text-xl outline-none focus:border-blue-400 focus:bg-white transition-all">
                    </div>
                </div>

                <div class="mb-8">
                    <label class="block text-[#1e3a8a] text-2xl mb-2 font-semibold">สถานที่ (Location)</label>
                    <div class="relative">
                        <input type="text" name="location" placeholder="เช่น คณะ IT-MSU" 
                               class="w-full bg-gray-50 border-2 border-blue-100 rounded-2xl p-4 pl-12 text-xl outline-none focus:border-blue-400 focus:bg-white transition-all">
                        <span class="absolute left-4 top-4 text-2xl text-blue-400">📍</span>
                    </div>
                </div>

                <div class="mb-12">
                    <label class="block text-[#1e3a8a] text-2xl mb-3 font-semibold">รูปภาพเพิ่มเติม (Gallery)</label>
                    <div class="bg-blue-50 p-6 rounded-[30px] border-2 border-blue-100">
                        <div class="flex flex-wrap gap-4">
                            <div class="w-24 h-24 bg-blue-200 rounded-2xl border-2 border-white shadow-sm flex items-center justify-center text-blue-600 font-bold overflow-hidden">
                                <span class="opacity-50 italic text-sm">Preview</span>
                            </div>
                            <div class="w-24 h-24 bg-blue-200 rounded-2xl border-2 border-white shadow-sm flex items-center justify-center text-blue-600 font-bold">
                                <span class="opacity-50 italic text-sm">Preview</span>
                            </div>
                            <label class="w-24 h-24 bg-white border-2 border-dashed border-blue-300 rounded-2xl flex items-center justify-center cursor-pointer hover:border-blue-500 hover:bg-blue-100 transition-all shadow-sm">
                                <input type="file" name="more_images[]" multiple class="hidden">
                                <span class="text-4xl text-blue-400">+</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row justify-center gap-6 mt-4">
                    <button type="submit" 
                            class="px-12 py-3 bg-[#1e3a8a] text-white rounded-full text-1xl font-bold hover:bg-blue-800 transition-all hover:scale-105 shadow-lg active:scale-95">
                        สร้างกิจกรรม
                    </button>
                    <a href="#" 
                       class="px-12 py-3 bg-white border-2 border-[#1e3a8a] text-[#1e3a8a] rounded-full text-1xl font-bold hover:bg-gray-50 transition-all text-center">
                        ยกเลิก
                    </a>
                </div>

            </form>
        </div>
    </div>

</body>
</html>