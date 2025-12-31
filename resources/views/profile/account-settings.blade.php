@extends('layouts.template')
@section('content')
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 breadcrumb-wrapper mb-4">
                <span class="text-muted fw-light">Configuración de la cuenta /</span> {{ Auth::user()->name }}
              </h4>

              <div class="row">
                <div class="col-md-12">
                  <div class="card mb-4">
                    <h5 class="card-header">Detalles del perfil</h5>
                    <!-- Account -->
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img
                          src="../../assets/img/avatars/{{ Auth::user()->avatar }}"
                          alt="user-avatar"
                          class="d-block rounded"
                          height="100"
                          width="100"
                          id="uploadedAvatar" />
                        <div class="button-wrapper">
                          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Subir nueva foto</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="upload"
                              class="account-file-input"
                              hidden
                              accept="image/png, image/jpeg" />
                          </label>
                          <button type="button" class="btn btn-label-secondary account-image-reset mb-4">
                            <i class="bx bx-reset d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Reiniciar</span>
                          </button>

                          <p class="mb-0">Se permiten archivos JPG, GIF o PNG. Tamaño máximo: 800 K.</p>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" method="GET" onsubmit="return false">
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="name" class="form-label">Nombre Completo</label>
                            <input
                              class="form-control"
                              type="text"
                              id="name"
                              name="name"
                              value="{{old('name', $user->name)}}"
                              autofocus />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input
                              readonly
                              class="form-control"
                              type="text"
                              id="email"
                              name="email"
                              value="{{old('email', $user->email)}}"
                              placeholder="john.doe@example.com" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="phoneNumber">Número de teléfono</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text">CO (+57)</span>
                              <input                              
                                type="text"
                                id="phoneNumber"
                                name="phoneNumber"
                                class="form-control"
                                value="{{old('name', $user->phone)}}"
                                placeholder="202 555 0111" />
                            </div>
                          </div>

                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Save changes</button>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                  <div class="card">
                    <h5 class="card-header">Eliminar cuenta</h5>
                    <div class="card-body">
                      <div class="mb-3 col-12 mb-0">
                        <div class="alert alert-warning">
                          <h6 class="alert-heading mb-1">¿Estás seguro de que quieres eliminar tu cuenta?</h6>
                          <p class="mb-0">Una vez que eliminas tu cuenta, no hay vuelta atrás. Por favor, asegúrate.</p>
                        </div>
                      </div>
                      <form id="formAccountDeactivation" onsubmit="return false">
                        <div class="form-check mb-3">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="accountActivation"
                            id="accountActivation" />
                          <label class="form-check-label" for="accountActivation">Confirmo la desactivación de mi cuenta</label
                          >
                        </div>
                        <button type="submit" class="btn btn-danger deactivate-account">Desactivar cuenta</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
@endsection