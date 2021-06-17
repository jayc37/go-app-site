{% extends "layouts/base-fullscreen.html" %}

{% block title %} Error 403 {% endblock %} 

<!-- Specific Page CSS goes HERE  -->
{% block stylesheets %}{% endblock stylesheets %}

{% block content %}

    <main>
        <section class="vh-100 d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center d-flex align-items-center justify-content-center">
                        <div>
                            <img class="img-fluid w-75" src="/static/assets/img/illustrations/404.svg" alt="404 not found">
                            <h1 class="mt-5">
                                Access <span class="fw-bolder text-primary">denied</span>
                            </h1>
                            <p class="lead my-4">
                                Please contact support or authenticate
                            </p>
                            <a class="btn btn-dark animate-hover" href="/sign-in.html">
                               <i class="fas fa-chevron-left me-3 ps-2 animate-left-3"></i>LOGIN</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

{% endblock content %}

<!-- Specific Page JS goes HERE  -->
{% block javascripts %}{% endblock javascripts %}
