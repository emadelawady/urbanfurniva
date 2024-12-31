<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BedroomController;
use App\Http\Controllers\BurnerGasController;
use App\Http\Controllers\ChairController;
use App\Http\Controllers\WhyusController;
use App\Http\Controllers\KitchenController;
use App\Http\Controllers\OurworkController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CupboardController;
use App\Http\Controllers\DiningroomController;
use App\Http\Controllers\DoorHandleController;
use App\Http\Controllers\EntrywayfurnitureController;
use App\Http\Controllers\FurnitureController;
use App\Http\Controllers\LivingRoomController;
use App\Http\Controllers\OfficefurnitureController;
use App\Http\Controllers\OutdoorfurnitureController;
use App\Http\Controllers\OvenController;
use App\Http\Controllers\RangeHoodController;
use App\Http\Controllers\SinkController;
use App\Http\Controllers\SofaController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\TrollController;
use App\Models\Furniture\Outdoorfurniture;
use App\Models\Sofa;

// Route::get('/', function () {
//     return view('welcome');
// });





Route::get('/language/{locale}', function ($locale) {

    session()->put('locale', $locale);

    return redirect()->back();

})->name('locale');







Route::get('/', [HomePageController::class, 'index'])->name('home.page');

Route::get('/about-us', [AboutController::class, 'index'])->name('about.us');

Route::get('/why-us', [WhyusController::class, 'index'])->name('why.us');

Route::get('/our-works', [OurworkController::class, 'index'])->name('our.works');



Route::get('/kitchens', [KitchenController::class, 'index'])->name('kitchens');

Route::get('/kitchens/{kitchen}', [KitchenController::class, 'show'])->name('kitchens.show');




Route::get('/contact-us', [ContactController::class, 'index'])->name('contact.us');

Route::post('/contact-us', [ContactController::class, 'store'])->name('contact.us.post');






Route::get('/kitchen/range-hoods', [RangeHoodController::class, 'index'])->name('range.hood');

Route::get('/kitchen/range-hoods/{rangeHood}', [RangeHoodController::class, 'show'])->name('range.hood.show');






Route::get('/kitchen/burner-gas', [BurnerGasController::class, 'index'])->name('burner.gas');


Route::get('/kitchen/burner-gas/{burnerGas}', [BurnerGasController::class, 'show'])->name('burner.gas.show');





Route::get('/kitchen/ovens', [OvenController::class, 'index'])->name('ovens');


Route::get('/kitchen/ovens/{oven}', [OvenController::class, 'show'])->name('ovens.show');





Route::get('/kitchen/trolls', [TrollController::class, 'index'])->name('trolls');


Route::get('/kitchen/trolls/{troll}', [TrollController::class, 'show'])->name('trolls.show');





Route::get('/kitchen/door-handle', [DoorHandleController::class, 'index'])->name('doorHandle');


Route::get('/kitchen/door-handle/{doorHandle}', [DoorHandleController::class, 'show'])->name('doorHandle.show');



Route::get('/kitchen/sinks', [SinkController::class, 'index'])->name('sinks');


Route::get('/kitchen/sinks/{sink}', [SinkController::class, 'show'])->name('sinks.show');





// furniture


Route::get('/furnitures', [FurnitureController::class, 'index'])->name('furniture');

Route::get('/furnitures/{furniture}', [FurnitureController::class, 'show'])->name('furniture.show');




Route::get('/furniture/living-room', [LivingRoomController::class, 'index'])->name('furniture.livingroom');

Route::get('/furniture/living-room/{livingRoom}', [LivingRoomController::class, 'show'])->name('furniture.livingroom.show');





Route::get('/furniture/livingroom/sofas', [SofaController::class, 'index'])->name('furniture.livingroom.sofa');

Route::get('/furniture/livingroom/sofa/{sofa}', [SofaController::class, 'show'])->name('furniture.livingroom.sofa.show');





Route::get('/furniture/livingroom/chairs', [ChairController::class, 'index'])->name('furniture.livingroom.chair');

Route::get('/furniture/livingroom/chair/{chair}', [ChairController::class, 'show'])->name('furniture.livingroom.chair.show');





Route::get('/furniture/livingroom/tables', [TableController::class, 'index'])->name('furniture.livingroom.table');

Route::get('/furniture/livingroom/table/{table}', [TableController::class, 'show'])->name('furniture.livingroom.table.show');




Route::get('/furniture/livingroom/cupboards', [CupboardController::class, 'index'])->name('furniture.livingroom.cupboard');

Route::get('/furniture/livingroom/cupboard/{cupboard}', [CupboardController::class, 'show'])->name('furniture.livingroom.cupboard.show');





// bedroom


Route::get('/furniture/bedrooms', [BedroomController::class, 'index'])->name('furniture.bedroom');

Route::get('/furniture/bedroom/{bedroom}', [BedroomController::class, 'show'])->name('furniture.bedroom.show');



// diningroom


Route::get('/furniture/diningrooms', [DiningroomController::class, 'index'])->name('furniture.diningroom');

Route::get('/furniture/diningroom/{diningroom}', [DiningroomController::class, 'show'])->name('furniture.diningroom.show');





// Office Furniture


Route::get('/furniture/officefurnitures', [OfficefurnitureController::class, 'index'])->name('furniture.officefurniture');

Route::get('/furniture/officefurniture/{officefurniture}', [OfficefurnitureController::class, 'show'])->name('furniture.officefurniture.show');







// Outdoor Furniture


Route::get('/furniture/outdoorfurnitures', [OutdoorfurnitureController::class, 'index'])->name('furniture.outdoorfurniture');

Route::get('/furniture/outdoorfurniture/{outdoorfurniture}', [OutdoorfurnitureController::class, 'show'])->name('furniture.outdoorfurniture.show');








// Entryway Furniture


Route::get('/furniture/entrywayfurniture', [EntrywayfurnitureController::class, 'index'])->name('furniture.entrywayfurniture');

Route::get('/furniture/entrywayfurniture/{entrywayfurniture}', [EntrywayfurnitureController::class, 'show'])->name('furniture.entrywayfurniture.show');



