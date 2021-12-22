<?PHP
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Company;
class CompanyController extends Controller
{
    //首頁
    public function indexPage(Request $request)
    {   
        $company = new Company();
        return view('company',['company' => $company->get_companyName($request->input('company'))]);
        
    }
}
?>