<?php
namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CompanyDashboardController extends Controller
{
    public function companyDashboard()
    {
        $user = auth()->user();
        $companies = Company::all(); // Replace this with your actual company data retrieval logic

        return view('dashboard.companydashboard.company', compact('user', 'companies'));
    }

    public function index()
    {
        $companies = Company::all();
        return view('dashboard.companydashboard.company', compact('companies'));
    }

    public function create()
    {
        return view('dashboard.companydashboard.add-company');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'company_name' => 'required',
            // 'email' => 'required|email',
            // 'password' => 'required|min:6|confirmed',
            // 'about' => 'required',
            // 'country' => 'required',
            // 'major' => 'required',
        ]);

        $company = new Company;
        $company->company_name = $request->input('company_name');
        $company->email = $request->input('email');
        $company->password = Hash::make($request->input('password'));
        $company->password_confirmation = $request->input('confirm-password');
        $company->founded_year = 2000;
        $company->role_id = 3; 
        $company->about = $request->input('about');
        $company->headquarters = $request->input('country');
        $company->industry = $request->input('major');
        $company->save();

        return redirect()->route('companydashboard.company')->with('success', 'Company created successfully.');
    }

    public function edit($id)
    {
        $company = Company::findOrFail($id);

        return view('dashboard.companydashboard.edit-company', compact('company'));
    }

    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);
        $validatedData = $request->validate([
            'company_name' => 'required',
            // 'email' => 'required|email',
            // 'password' => 'required|min:6|confirmed',
            // 'about' => 'required',
            // 'country' => 'required',
            // 'major' => 'required',
        ]);

        $company->company_name = $request->input('company_name');
        $company->email = $request->input('email');
        $company->password = Hash::make($request->input('password'));
        $company->password_confirmation = $request->input('confirm-password');
        $company->about = $request->input('about');
        $company->headquarters = $request->input('country');
        $company->industry = $request->input('major');
        $company->save();

        return redirect()->route('companydashboard.company');
    }

    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();

        return redirect()->back()->with('success', 'Company deleted successfully.');
    }
}

