@extends('layouts.app2')
@include('layouts.make')

@section('content')

<div class="home-img">
  <div class="bg-opacity">
    <div class="carsoul-caption">
        <h2>あったらいいな。を形に</h2>
        <h1>MAKE MOKU</h1>
        <a class="btn btn-primary" href="#" role="button">さっそくもくもくを会を探す</a>
    </div>
  </div>  
</div><!-- home-img -->

<div class="problem">
    <h1>プログラミング学習でこんな悩みありませんか？</h1>
    <div class="triangle"></div>
    <ul>
      <li><i class="fas fa-pencil-alt"></i>独学で学習していて辛い</li>
      <li><i class="fas fa-pencil-alt"></i>相談する相手が近くにいない</li>
      <li><i class="fas fa-pencil-alt"></i>オフラインで仲間と一緒に学習したい</li>
      <li><i class="fas fa-pencil-alt"></i>無料で学べる学習環境が欲しい</li>
    </ul>
</div><!-- problem -->

<div class="join-nav">
    <h1> もくもく会に参加してみる</h1>
    <a class="btn btn-primary" href="#" role="button">こちらをクリック</a>
</div>

<div class="join">
    <a name="join"></a>
    <h1>MAKE MOKU<span>とは？？</span></h1>
    <p>もくもく会をより身近にするサービスです</p>   
    <div class="chara-set container">
      <div class="chara-set2 row justify-content-center">
        <div class="chara  col-xs-12 col-md-4 col-lg-3">
          <div class="chara-card ">特徴1</div>
          <h1>話し合って解決</h1>
          <hr>
          <p>学習言語が選択できるため、もくもく会時の
          ミスマッチをなくすことができます。また同じ言語を使用している人たちが
          集まるため、分からないことがあればすぐに相談することができます。</p>
        </div>

        <div class="chara  col-xs-12 col-md-4 col-lg-3">
          <div class="chara-card">特徴2</div>
          <h1>環境の選択</h1>
          <hr>
          <p>自宅で静かに学習したい場合や、実際に仲間と会って話し合いながら学習
          したい場合など用途に合わせて利用することができます。またオフラインでは
          近くの地域の人たち同士で学習する環境を提供しています。</p>
        </div>

        <div class="chara col-xs-12 col-md-4 col-lg-3">
          <div class="chara-card">特徴3</div>
          <h1>ホストになれる</h1>
          <hr>
          <p>参加の他に学習言語と開催地域を設定して自分でももくもく会を作成することもできます。
          作成の手間は出来るだけ簡潔にしているため、すぐに会を開き仲間を募集します。
          </p>
        </div> 

      </div>     
    </div><!-- charaset -->

</div><!-- join -->


<div class="join-nav">
    <h1> もくもく会に参加してみる</h1>
    <a class="btn btn-primary" href="#" role="button">こちらをクリック</a>
</div>

<div class="example">
    <h1>ホストが提供するもくもく会は様々です</h1>
    <p>自分に合った会をを探せます</p>
    <h2>もくもく会の一例</h2>

    <div class="exmaple-set container">
      <div class="row justify-content-center">

      <div class="example-card  col-xs-12 col-md-3 col-lg-3">
        <img src="https://cdn.pixabay.com/photo/2018/05/08/08/43/handshake-3382504_1280.jpg" alt="">
        <h3>LP制作もくもく会</h3>
        <p>副業としてプログラミングで稼ぎたい人を募集しています。クライアント様とのやりとりの仕方や
        訴求力の強いLPを作るためにはどのようなことなことに気をつければ良いのか実際の資料を見せながら
        一緒に学んでいきましょう。</p>
      </div>
  
      <div class="example-card col-xs-12 col-md-3 col-lg-3">
        <img src="https://images.unsplash.com/photo-1490367532201-b9bc1dc483f6?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1500&q=80" alt="">
        <h3>転職対策もくもく会</h3>
        <p>プログラミング学習だけではなくエンジニアになるための情報を共有します。
        また効果的なポートフォリオを作るために必須なノウハウなどを学び、就職・転職に
        生かすことができるようなもくもく会を開催します。</p>
      </div>

      <div class="example-card col-xs-12 col-md-3 col-lg-3">
        <img src="https://cdn.pixabay.com/photo/2016/03/09/09/22/workplace-1245776_1280.jpg" alt="">
        <h3>雑談会ありもくもく会</h3>
        <p>いつもひとりで学習していて辛い、相談したい人が周りにいなくて挫折しそうな人を募集します。
        実際にプログラミング学習をしている人達と会うことで悩みの相談をしたり学習のモチベーションを
        高め会えたらと思います。</p>
      </div>

      </div><!-- row -->
    </div><!-- example-set -->  
</div><!-- example -->

<div class="flow">
    <a name="flow"></a>
    <h1>参加の流れ</h1>
    <p>参加の仕方は至ってシンプルです</p>
          <div class="step">
            <span class="circle">STEP1</span>
            <h2>新規登録より入力</h2>
            <p class="d-none d-md-block">新規登録からユーザーネームとメールアドレスをご記入ください</p>
          </div>

          <div class="step">
            <span class="circle">STEP2</span>
            <h2>もくもく会を探す</h2>
            <p class="d-none d-md-block">もくもく会の一覧からご希望の会をお選びください</p>
          </div>

          <div class="step">
            <span class="circle">STEP3</span>
            <h2>ホストに参加連絡</h2>
            <p class="d-none d-md-block">ホストに連絡を取り、参加の意思を明確にします</p>
          </div>

          <div class="step">
            <span class="circle">STEP4</span>
            <h2>もくもく会開始</h2>
            <p class="d-none d-md-block">もくもく会のスタートです！</p>
          </div>
</div><!-- flow -->

<div class="join-nav">
    <h1>もくもく会に参加してみる</h1>
    <a class="btn btn-primary" href="#" role="button">こちらをクリック</a>
</div>

<div class="voice">
  <a name="voice"></a>
  <h1>参加者の声</h1>
  <p>実際にもくもく会を通して感じた貴重な体験談です。</p>


  <div class="people-set container">
      <div class="row justify-content-center">
        
        <div class="people col-md-3">
          <img src="https://cdn.pixabay.com/photo/2016/11/29/09/38/adult-1868750_1280.jpg" alt="">
          <p class="name">Nick(42)</p>
          <h2>働きながらでも継続できる</h2>
          <hr>
          <p>私自身副業の傍、プログラミング学習を始めましたが、オンラインサロンでのもくもく会の時間の都合に
          合わないことがほとんどで困っていました。そこでMAKE MOKUを利用したら私と同じ境遇の人たちと
          出会い、会社終わりにプログラミング学習をする仲間ができました。今では学習仲間が飲み仲間になるほど
          親しくなりました！</p> 
        </div>
        
        <div class="people col-md-3">
          <img src="https://cdn.pixabay.com/photo/2014/11/09/23/32/boy-524512_1280.jpg" alt="">
          <p class="name">Chiris(24)</p>
          <h2>エンジニア転職に成功しました</h2>
          <hr>
          <p>私自身地方の出身なため、エンジニア就職に関しての情報収集などが難しかったのですが、もくもく会を通して
          エンジニア転職に成功されている人の話を聞き、どのような手順で学習をして行ったのか学ぶことができ、
          学習の継続末、見事エンジニア転職に成功することができました。</p>
        </div>


        <div class="people col-md-3">
          <img src="https://cdn.pixabay.com/photo/2016/11/29/05/46/adult-1867618_1280.jpg" alt="">
            <p class="name">Jessica(31)</p>
            <h2>楽しく学習ができています</h2>
            <hr>
            <p>いつもひとりで学習していて相談できる仲間がいないため毎日大変でしたが、
            もくもく会で最高な友達と出会い、彼らにが励ましてくれたおかげで今も学習を継続することができて
            います。本当にこの環境に感謝しています。</p>
          </div>
        </div>

      </div><!-- container -->
  </div><!-- row -->       
</div>

<div class="end">
 <p>Copyright (C) 2020 MAKE MOKU.Ltd All Rights Reserved.</p>
</div>

@endsection
