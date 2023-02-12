@extends('base.base')
@section('title', 'HOME')
@section('activate_home', 'activate-btn-header')
@section('content')

    <section>
        <p class="text-light fs-1 text-center title-home">GregMac</p>
        <p class="text-center">Ensino e serviços.</p>
        <div class="presentation-logos-home">
            <img src="/img/programming-logo.png" class="logo-home-presentation" alt="">
            <img src="/img/logo.png" class="logo-home-presentation" alt="">
            <img src="/img/english.png" class="logo-home-presentation" alt="">
        </div>
    </section>

    <section>
        <div class="col-md-12">
            <div class="text-presentation-primary">
                <p class="text-center fs-4 mb-4"><strong>Qual o propósito da GregMac&copy;?</strong></p>
                <p>Bem-vindo a GregMac! Aqui, você encontrará uma ampla variedade de cursos online, abrangendo desde Inglês até cursos de desenvolvimento web e desktop. A missão da GregMac&copy; é oferecer a você a oportunidade de aprender e crescer de forma acessível e conveniente. Temos cursos gratuitos de lógica de programação e Inglês, para te ajudar a dar um start na sua carreira!
                <br>
                Com nossos cursos online, você pode estudar no seu próprio ritmo, a qualquer hora e em qualquer lugar. Além disso, todos os nossos cursos são acompanhados por certificados válidos, para que você possa ampliar suas perspectivas profissionais.
                <br>
                Navegue pelo nosso site para ver nossos cursos disponíveis, e não hesite em entrar em contato conosco se tiver alguma dúvida ou precisar de ajuda na escolha do curso certo para você. Estamos sempre aqui para lhe ajudar. Comece sua jornada de aprendizado conosco hoje!
                </p>
            </div>
        </div>
        <div class="row">
            <p class="text-center fs-4 mb-4"><strong>Nossos cursos</strong></p>
            <div class="col-md-6">
                <div class="text-presentation-secondary">
                    <p>
                    A GregMac está ansiosa para lhe oferecer uma ampla gama de cursos, abrangendo habilidades práticas, desenvolvimento pessoal e profissional.
                    <br>
                    Para aqueles que procuram aprimorar suas habilidades em inglês, oferecemos cursos online de inglês de alta qualidade. Com nossa metodologia eficaz e acessível, você terá a oportunidade de melhorar sua conversação, compreensão auditiva e escrita, e aumentar seu vocabulário e conhecimento de gramática.</p>
                    <p class="text-center"><img src="/img/english_uk.png" alt="uk flag" class="english-flag text-center"></p>
                    <p>
                    Para aqueles interessados em desenvolvimento web, temos cursos abrangentes que cobrem tudo, desde desenvolvimento para a Web, até desenvolvimento de sistemas desktop. Com nossos cursos online, você pode estudar no seu próprio ritmo, a qualquer hora e em qualquer lugar. Além disso, todos os nossos cursos são acompanhados por certificados válidos, para que você possa ampliar suas perspectivas profissionais.
                    </p>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="text-presentation-secondary">
                    <p>
                    Também oferecemos cursos de desenvolvimento desktop, que cobrem a criação de aplicativos para sistemas operacionais como Windows e MacOS. Se você deseja construir aplicativos poderosos e de alto desempenho, nossos cursos são a escolha certa para você.
                    <br>
                    Navegue pelo nosso site para ver todos os cursos disponíveis e encontrar o curso certo para você. Estamos sempre aqui para lhe ajudar, então não hesite em entrar em contato conosco se tiver alguma dúvida ou precisar de ajuda na escolha do curso certo para você. Comece sua jornada de aprendizado conosco hoje!
                    </p>
                    <div class="w-100 logos-langs" style="display: flex; justify-content: space-between;">
                        <img src="/img/logosweb2.png" alt="web logos" class="frameworks-logos">
                        <img src="/img/phplogo.png" alt="web logos" class="frameworks-logos">
                        <img src="/img/javalogo.png" alt="web logos" class="frameworks-logos">
                    </div>
                </div>
            </div>
            <a href="/cursos" class="text-center btn btn-secondary button-know-cousers fs-5">Conheça nossos cursos <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>

@endsection

