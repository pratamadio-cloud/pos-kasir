<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
        }
        
        .cart-container {
            transition: all 0.3s ease;
        }
        
        .cart-item {
            transition: all 0.2s ease;
        }
        
        .cart-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
        
        .quantity-btn {
            transition: all 0.2s ease;
        }
        
        .quantity-btn:hover {
            background-color: #e2e8f0;
        }
        
        .empty-cart {
            animation: fadeIn 0.5s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .pulse {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
    </style>
</head>
<body class="bg-gray-50 py-8">
    <div class="max-w-6xl mx-auto px-4">
        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Keranjang Belanja</h1>
            <div class="flex items-center space-x-2">
                <span class="bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full">
                    <i class="fas fa-shopping-cart mr-1"></i>
                    <span id="item-count">3</span> item
                </span>
            </div>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Cart Items -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-xl shadow-sm overflow-hidden cart-container">
                    <div class="p-6 border-b border-gray-100">
                        <h2 class="text-xl font-semibold text-gray-800">Daftar Produk</h2>
                    </div>
                    
                    <div id="cart-items">
                        <!-- Item 1 -->
                        <div class="p-6 border-b border-gray-100 cart-item">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-20 h-20 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-mobile-alt text-blue-500 text-xl"></i>
                                </div>
                                <div class="flex-grow">
                                    <div class="flex justify-between">
                                        <div>
                                            <h3 class="font-medium text-gray-800">Samsung Galaxy S23</h3>
                                            <p class="text-sm text-gray-500 mt-1">Smartphone</p>
                                        </div>
                                        <div class="text-right">
                                            <p class="font-semibold text-gray-800">Rp8.499.000</p>
                                            <p class="text-xs text-gray-500 mt-1">Stok: 12</p>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center justify-between mt-4">
                                        <div class="flex items-center">
                                            <button class="quantity-btn w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center">
                                                <i class="fas fa-minus text-gray-600 text-xs"></i>
                                            </button>
                                            <input type="number" value="1" class="w-12 text-center border-0 focus:ring-0 mx-2" min="1">
                                            <button class="quantity-btn w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center">
                                                <i class="fas fa-plus text-gray-600 text-xs"></i>
                                            </button>
                                        </div>
                                        <button class="text-red-500 hover:text-red-700 transition-colors">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Item 2 -->
                        <div class="p-6 border-b border-gray-100 cart-item">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-20 h-20 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-headphones text-green-500 text-xl"></i>
                                </div>
                                <div class="flex-grow">
                                    <div class="flex justify-between">
                                        <div>
                                            <h3 class="font-medium text-gray-800">Sony WH-1000XM4</h3>
                                            <p class="text-sm text-gray-500 mt-1">Headphone</p>
                                        </div>
                                        <div class="text-right">
                                            <p class="font-semibold text-gray-800">Rp3.999.000</p>
                                            <p class="text-xs text-gray-500 mt-1">Stok: 7</p>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center justify-between mt-4">
                                        <div class="flex items-center">
                                            <button class="quantity-btn w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center">
                                                <i class="fas fa-minus text-gray-600 text-xs"></i>
                                            </button>
                                            <input type="number" value="2" class="w-12 text-center border-0 focus:ring-0 mx-2" min="1">
                                            <button class="quantity-btn w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center">
                                                <i class="fas fa-plus text-gray-600 text-xs"></i>
                                            </button>
                                        </div>
                                        <button class="text-red-500 hover:text-red-700 transition-colors">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Item 3 -->
                        <div class="p-6 cart-item">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-20 h-20 bg-gradient-to-r from-purple-50 to-pink-50 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-laptop text-purple-500 text-xl"></i>
                                </div>
                                <div class="flex-grow">
                                    <div class="flex justify-between">
                                        <div>
                                            <h3 class="font-medium text-gray-800">MacBook Air M2</h3>
                                            <p class="text-sm text-gray-500 mt-1">Laptop</p>
                                        </div>
                                        <div class="text-right">
                                            <p class="font-semibold text-gray-800">Rp17.999.000</p>
                                            <p class="text-xs text-gray-500 mt-1">Stok: 5</p>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center justify-between mt-4">
                                        <div class="flex items-center">
                                            <button class="quantity-btn w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center">
                                                <i class="fas fa-minus text-gray-600 text-xs"></i>
                                            </button>
                                            <input type="number" value="1" class="w-12 text-center border-0 focus:ring-0 mx-2" min="1">
                                            <button class="quantity-btn w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center">
                                                <i class="fas fa-plus text-gray-600 text-xs"></i>
                                            </button>
                                        </div>
                                        <button class="text-red-500 hover:text-red-700 transition-colors">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Empty Cart State -->
                    <div id="empty-cart" class="hidden p-12 text-center empty-cart">
                        <div class="w-24 h-24 mx-auto mb-6 rounded-full bg-gray-100 flex items-center justify-center">
                            <i class="fas fa-shopping-cart text-gray-400 text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-medium text-gray-700 mb-2">Keranjang Kosong</h3>
                        <p class="text-gray-500 mb-6">Belum ada produk di keranjang belanja Anda</p>
                        <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition-colors">
                            Mulai Belanja
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Order Summary -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-xl shadow-sm p-6 sticky top-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-6">Ringkasan Belanja</h2>
                    
                    <div class="space-y-4 mb-6">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Subtotal (3 item)</span>
                            <span class="font-medium">Rp30.497.000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Biaya Pengiriman</span>
                            <span class="font-medium">Rp15.000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Diskon</span>
                            <span class="font-medium text-green-600">-Rp500.000</span>
                        </div>
                        <div class="border-t border-gray-200 pt-4 flex justify-between">
                            <span class="text-gray-800 font-semibold">Total</span>
                            <span class="text-gray-800 font-bold text-lg">Rp30.012.000</span>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <div class="flex items-center mb-2">
                            <i class="fas fa-tag text-green-500 mr-2"></i>
                            <span class="text-sm font-medium text-gray-700">Kode Promo</span>
                        </div>
                        <div class="flex">
                            <input type="text" placeholder="Masukkan kode" class="flex-grow border border-gray-300 rounded-l-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-r-lg font-medium transition-colors">
                                Terapkan
                            </button>
                        </div>
                    </div>
                    
                    <button class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white py-3 rounded-lg font-semibold mb-4 transition-all shadow-md hover:shadow-lg pulse">
                        Lanjut ke Pembayaran
                    </button>
                    
                    <button id="clear-cart" class="w-full bg-gray-100 hover:bg-gray-200 text-gray-800 py-3 rounded-lg font-medium transition-colors flex items-center justify-center">
                        <i class="fas fa-trash-alt mr-2"></i>
                        Kosongkan Keranjang
                    </button>
                </div>
                
                <!-- Security Badge -->
                <div class="mt-6 bg-white rounded-xl shadow-sm p-6">
                    <div class="flex items-center justify-center space-x-6 text-gray-500">
                        <div class="text-center">
                            <i class="fas fa-shield-alt text-2xl mb-2 text-green-500"></i>
                            <p class="text-xs">Transaksi Aman</p>
                        </div>
                        <div class="text-center">
                            <i class="fas fa-lock text-2xl mb-2 text-blue-500"></i>
                            <p class="text-xs">Data Terlindungi</p>
                        </div>
                        <div class="text-center">
                            <i class="fas fa-truck text-2xl mb-2 text-purple-500"></i>
                            <p class="text-xs">Gratis Ongkir</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Toggle empty cart state
        document.getElementById('clear-cart').addEventListener('click', function() {
            document.getElementById('cart-items').classList.add('hidden');
            document.getElementById('empty-cart').classList.remove('hidden');
            document.getElementById('item-count').textContent = '0';
        });
        
        // Quantity buttons functionality
        document.querySelectorAll('.quantity-btn').forEach(button => {
            button.addEventListener('click', function() {
                const input = this.parentElement.querySelector('input[type="number"]');
                if (this.querySelector('.fa-minus')) {
                    if (input.value > 1) {
                        input.value = parseInt(input.value) - 1;
                    }
                } else {
                    input.value = parseInt(input.value) + 1;
                }
                
                // Trigger change event for Livewire
                input.dispatchEvent(new Event('change', { bubbles: true }));
            });
        });
        
        // Delete item functionality
        document.querySelectorAll('.fa-trash-alt').forEach(icon => {
            icon.addEventListener('click', function() {
                const item = this.closest('.cart-item');
                item.style.opacity = '0';
                item.style.transform = 'translateX(20px)';
                
                setTimeout(() => {
                    item.remove();
                    updateItemCount();
                    
                    // Show empty cart if no items left
                    if (document.querySelectorAll('.cart-item').length === 0) {
                        document.getElementById('empty-cart').classList.remove('hidden');
                    }
                }, 300);
            });
        });
        
        function updateItemCount() {
            const itemCount = document.querySelectorAll('.cart-item').length;
            document.getElementById('item-count').textContent = itemCount;
        }
    </script>
</body>
</html>
