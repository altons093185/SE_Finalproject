<?PHP
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class SearchController extends Controller
{
    //首頁
    public function indexPage(Request $request)
    {   
        $area = $request->input('area');
        $Alert_disease = DB::table('severity_level')->where('AreaDesc', $area)->get();
        return view('search',['area' => $Alert_disease]);
        
    }
}
?>