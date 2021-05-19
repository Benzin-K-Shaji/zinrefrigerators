<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pmodel;
use App\Models\cartmodel;
use DB;
use Session;
use App\Models\order;
class pcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product');
    }
   
    public function cartadd($pid)
    {
        $row=DB::table('pmodels')->where('pid',$pid)->first();
        $items=['info'=>$row];
        return view('cart',compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            
            'pid' => 'required|unique:App\Models\pmodel,pid',
            'pname' => 'required',
            'pdis' => 'required',
            'price' => 'required',
            'brand' => 'required',
            
        ]);

        $getpid=request('pid');
        $getpname=request('pname');
        $getpdis=request('pdis');
        $getprice=request('price');
        $getbrand=request('brand');
        $getpimage=$request->file('pimage');
        $name=$getpimage->getClientOriginalName();
        $getpimage->move(public_path('assets/project_img'),$name);

        
        


       
       $user=new pmodel();
        $user->pid=$getpid;
        $user->pname=$getpname;
        $user->pdis= $getpdis;
        $user->price=$getprice;
        $user->brand=$getbrand; 
        $user->pimage=$name;
        
        
        $user->save();
       return redirect('/ap');
        
    }
    public function prodview()
    { 
        $prod=pmodel::all();
        return view('viewproduct',compact('prod'));

    }
    public function usrview()
    {
     $user=pmodel::all();
    // $data=['loggeduserinfo'=>pmodel::where('uname','=',session('loggeduser'))->first()];
     return view('apview',compact('user'));
    }
    
    public function edit($id)
         {

            $user=pmodel::find($id);
            return view('pedit',compact('user'));

         }

    public function update(Request $request)
    {


    //     $servicedetails=pmodel::find($id);


        
    //     $getpid=request('pid');
    //     $getpname=request('pname');
    //     $getpdis=request('pdis');
    //     $getprice=request('price');
    //     $getbrand=request('brand');
       
        
        


       
    //    $user=new pmodel();
    //     $user->pid=$getpid;
    //     $user->pname=$getpname;
    //     $user->pdis= $getpdis;
    //     $user->price=$getprice;
    //     $user->brand=$getbrand; 
        


    //     $user->save();
    $updating=DB::table('pmodels')->where('id',$request->input('id'))->update([
        
        'pname'=>$request->input('pname'),
        'pdis'=>$request->input('pdis'),
        'price'=>$request->input('price'),
        'brand'=>$request->input('brand')
    ]);
       return redirect('/userview');

    }

    public function deleteview($id)
    {
        $user=pmodel::find($id);
        return view('pdelete',compact('user'));
    }

    public function addtocart(Request $request)
    {

         $cartmodels=new cartmodel();
            $cartmodels->uname=session('uname');//$request->session()->get('newmodel')['id'];
            $cartmodels->pid=$request->pid;
            $cartmodels->save();
            if($cartmodels)
            {
                return redirect('/pv');
                // echo "success";
            }
        else
        {
            echo "fail";
            //return redirect('auth/login');
        }
}


    public function cartview()
    {
    $cats=cartmodel::all();
    return view('cart',compact('cats'));
    }
    public function cartlist()
   {
    $products=pmodel::all();
    $userId=Session::get('uname');
    $products= DB::table('cartmodels')
    ->join('pmodels', 'cartmodels.pid', '=', 'pmodels.pid')
    ->where('cartmodels.uname', $userId)
    ->select('pmodels.*','cartmodels.id as cart_id')
    ->get();
     return view('cart', compact('products'));
  }


public function removecart($id)
{
    cartmodel::destroy($id);

    return redirect('/cartlist');
}

public function ordernow()
{
    $products=pmodel::all();
    $userId=Session::get('uname');
    $total= $products= DB::table('cartmodels')
    ->join('pmodels', 'cartmodels.pid', '=', 'pmodels.pid')
    ->where('cartmodels.uname', $userId)
    ->sum('pmodels.price');
     return view('ordernow', ['total'=>$total]);
}

function orderplace (Request $req)
{
    $userId= Session::get('uname');
    $allCart=cartmodel::where('uname', $userId)->get();
    foreach($allCart as $cart)
  {
    $order= new order;
    $order->pid=$cart['pid'];
    $order->userid=$cart['uname']; 
    $order->address=$req->address;
    $order->status="pending";
    $order->paymentmethod=$req->payment; 
    $order->paymentstatus="pending";
    $order->save();
  } 
      cartmodel::where('uname', $userId)->delete();
      if($req->payment=='cod')
      {
        return redirect('/uh')->with('success','Thank you for your order');
      }
      else 
      { 
         return redirect('/card');

      }
}

public function myorder()
{
   // $products=pmodel::all();
    $userId=Session::get('uname');
    $orders= DB::table('orders')
    ->join('pmodels', 'orders.pid', '=', 'pmodels.pid')
    ->where('orders.userid', $userId)
    ->get();
     return view('myorders', ['orders'=>$orders]);
}
public function cancelorder($id,$uid)
    {
        DB::table('orders')
        ->where('pid',$id)
        ->where('userid',$uid)
        ->delete();
        return redirect('/myorders');
    }
public function card()
    {
        return view('card');

    }
    public function vieworders()
    { 
        $prod=order::all();
        return view('vieworders',compact('prod'));

    }
    public function orderedit($id)
    {
        $prod=order::find($id);
        
        return view('editorder',compact('prod'));
    }
    public function updateorder(Request $request, $id)
    {
        $prod=order::find($id);


        $getstatus=request('status');

        $prod->status = $getstatus;


        $prod->save();


        return redirect('/vieworders');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  /*  public function edit($id)
    {
        //
    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function update(Request $request, $id)
    {
        //
    }*/

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=pmodel::find($id);

        $user->delete();


        return redirect('/userview');
    }


public function search(Request $request)
    {
        $getpname=request('pname');
        $prod=pmodel::query()
        ->where('pname','LIKE',"%{$getpname}%")
        ->get();
        return view('viewproduct',compact('prod'));
    }
    public function usearch(Request $request)
    {
        $getpname=request('pname');
        $prod=pmodel::query()
        ->where('pname','LIKE',"%{$getpname}%")
        ->get();
        return view('usersearch',compact('prod'));
    }
}

