<?PHP
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    //首頁
    public function indexPage()
    {
        
        return view('home');
    }
}
?>