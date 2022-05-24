@include('inc.header')

@section('title')
    real estate
@endsection

<div id="creatDiv">

    @if($errors->any())
        <div id="alertMassege">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error  }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('creat')  }}" method="post">
        @csrf
        <div class="formCreat">
            <label> կոդ
                <input type="text" name="key">
            </label>
        </div>
        <div class="formCreat">
            <label> վերնագիր
                <input type="text" name="title">
            </label>
        </div>
        <div class="formCreat">
            <label> գործակալ
                <input type="text" name="agent">
            </label>
        </div>
        <div class="formCreat">
            <label> գումար
                <input type="text" name="sum">
            </label>
        </div>
        <div class="formCreat">
            <label> գործողության տեսակ
                <input type="text" name="buy_rent">
            </label>
        </div>
{{--        <div class="formCreat">--}}
{{--            <label> busy--}}
{{--                <input type="text" name="busy">--}}
{{--            </label>--}}
{{--        </div>--}}
        <div class="formCreat">
            <label> քաղաք
                <input type="text" name="country">
            </label>
        </div>
        <div class="formCreat">
            <label> փողոց
                <input type="text" name="region">
            </label>
        </div>
        <div class="formCreat">
            <label> շինություն
                <input type="text" name="type">
            </label>
        </div>
        <div class="formCreat">
            <label> շինությոան տեսակ
                <input type="text" name="building_type">
            </label>
        </div>
        <div class="formCreat">
            <label> հարկ
                <input type="text" name="floor">
            </label>
        </div>
        <div class="formCreat">
            <label> սենյակ
                <input type="text" name="room">
            </label>
        </div>
        <div class="formCreat">
            <label> լողավազան
                <input type="text" name="swimming">
            </label>
        </div>
        <div class="formCreat">
            <label> մանրամասն
                <textarea rows="10" cols="70" name="informations"></textarea>
            </label>
        </div>
        <div class="formCreat">
            <label> lat
                <input type="text" name="lat">
            </label>
        </div>
        <div class="formCreat">
            <label> long
                <input type="text" name="long">
            </label>
        </div>
        <div class="formCreat">
            <label>
                <input type="submit" name="creatSubmit" >
            </label>
        </div>

    </form>
</div>


<div>


</div>

@include('inc.footer')
