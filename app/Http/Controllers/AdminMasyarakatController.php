<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Masyarakat;

class AdminMasyarakatController extends Controller
{
    public function viewForgotMasyarakat($id_user)
    {
    	$user = User::find($id_user);
    	$id = $user->id;
    	$data['masyarakat'] = Masyarakat::where('id_user',$id)->first();
    	return view('admin.forgotMasyarakat',$data);
    }

    public function viewEditMasyarakat($id_user)
    {
    	$user = User::find($id_user);
    	$id = $user->id;
    	$data['masyarakat'] = Masyarakat::where('id_user',$id)->first();
    	return view('admin.editMasyarakat',$data);
    }

    public function forgotMasyarakatPost(Request $request,$id_user)
    {
    	$this->validate($request,[
    		'password' => 'required|min:8',
    		'confirmation' => 'required|same:password',
    	]);

    	$user = User::find($id_user);

    	$user->password = bcrypt($request->password);

    	$status = $user->update();

    	if ($status) {

	    	$id = $user->id;
	    	$data = User::find($id);
	    	$password = $data->password;
	    	$masyarakat = Masyarakat::where('id_user',$id)->first();

	    	$masyarakat->password = $password;

	    	$saveAs = $masyarakat->update();

    		if ($saveAs) {
    			return redirect('admin/masyarakat')->with('succes','berhasil forgot password');
    		}else{
    			return redirect('admin/masyarakat/forgot')->with('error','gagal forgot password');
    		}
    			
    	} else{
    		return redirect('admin/masyarakat/forgot')->with('error','gagal forgot password');
    	}
    }

    public function editMasyarakatPost(Request $request,$id_user)
    {
    	$this->validate($request,[
    		'nik' => 'required|min:16',
            'nama' => 'required|min:4',
            'username' => 'required|min:4',
            'telp' => 'required|min:11',    		    		
    	]);

    	$user = User::find($id_user);

    	$user->username = $request->username;

    	$status = $user->update();

    	if ($status) {

	    	$id = $user->id;
	    	$masyarakat = Masyarakat::where('id_user',$id)->first();

	    	$masyarakat->nama = $request->nama;
	    	$masyarakat->username = $request->username;
	    	$masyarakat->telp = $request->telp;

	    	$saveAs = $masyarakat->update();

    		if ($saveAs) {
    			return redirect('admin/masyarakat')->with('succes','berhasil edit data');
    		}else{
    			return redirect('admin/masyarakat/edit')->with('error','gagal edit data');
    		}
    			
    	} else{
    		return redirect('admin/masyarakat/edit')->with('error','gagal edit data');
    	}

    }

    public function destroyMasyarakatPost($id_user)
    {
    	$user = User::find($id_user);
    	$status = $user->delete();

    	if ($status) {

	    	$id = $user->id;
	    	$data = Masyarakat::where('id_user',$id)->first();

	    	$statusc = $data->delete();

	    	if ($statusc) {
    			return redirect('admin/masyarakat')->with('succes','berhasil hapus data');
	    	} else{
    			return redirect('admin/masyarakat')->with('error','gagal hapus data');
    		}

    	} else{
    		return redirect('admin/masyarakat')->with('error','gagal hapus data');
    	}

    }

}
