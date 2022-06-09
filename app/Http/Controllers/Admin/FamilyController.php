<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BirthPlace;
use App\Models\Civilian;
use App\Models\Education;
use App\Models\Family;
use App\Models\FamilyStatus;
use App\Models\MaritalStatus;
use App\Models\Profession;
use App\Models\Religion;
use App\Models\RT;
use App\Models\RW;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class FamilyController extends Controller
{

    public function index()
    {
        $list_rt = RT::get();

        $rt = RT::find(1);

        $families = $rt->families;
        return view('admin.family.index', ["list_rt" => $list_rt, "families" => $families]);
    }

    public function create()
    {
        $list_rt = RT::get();
        $martialStatuses = MaritalStatus::get();
        $education = Education::get();
        $religions = Religion::get();
        $familyStatuses = FamilyStatus::get();


        return view('admin.family.create', [
            "list_rt" => $list_rt,
            "educations" => $education,
            "maritalStatuses" => $martialStatuses,
            "religions" => $religions,
            "familyStatuses" => $familyStatuses,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $familyMember = [];
        $biodata = $request->get('biodata');
        foreach ($biodata as $bio) {
            $member = new Civilian;
            $member->nik = $bio['no_nik'];
            $member->full_name = $bio['full_name'];
            $member->date_of_birth = $bio['date'];
            $member->gender = $bio['gender'];
            $member->blood_type = $bio['blood_type'];
            $member->wedding_date = $bio['wedding_date'];
            $member->no_paspor = $bio['no_paspor'];
            $member->no_kitap = $bio['no_kitap'];
            $member->father_name = $bio['father_name'];
            $member->mother_name = $bio['mother_name'];
            $member->created_at = new \DateTime;

            //Join Insert
            $member->religion_id = $bio['religion'];
            $member->education_id = $bio['education'];
            $member->citizenship = $bio['citizenship'];
            $member->marital_status_id = $bio['marital_status'];
            $member->family_status_id = $bio['family_status'];

            //Insert Join
            $birthplace = BirthPlace::firstOrCreate([
                'name' => $bio['birthplace']
            ]);
            $profession = Profession::firstOrCreate([
                'name' => $bio['profession']
            ]);

            $member->birthplace_id = $birthplace->id;
            $member->profession_id = $profession->id;
            $member->save();

            array_push($familyMember, $member->id);
        }


        $rw = RW::find(1);
        $request['rw_id'] = $rw->id;
        $family = Family::create($request->except('biodata'));
        $family->familyMember()->attach($familyMember);

        return redirect('keluarga');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Family $family
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        $family = Family::findOrFail(Crypt::decrypt($id));
        return view('admin.family.show', [ 'family' => $family]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Family $family
     * @return \Illuminate\Http\Response
     */
    public function edit(Family $family)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Family $family
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Family $family)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Family $family
     * @return \Illuminate\Http\Response
     */
    public function destroy(Family $family)
    {
        //
    }

    public function import()
    {
        $list_rt = RT::get();
        return view('admin.family.create');
    }

    public function fileImport()
    {

    }
}
