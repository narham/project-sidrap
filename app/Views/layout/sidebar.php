  <div class="sidebar-wrapper">
      <nav class="mt-2">
          <!--begin::Sidebar Menu-->
          <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation"
              aria-label="Main navigation" data-accordion="false" id="navigation">

              <li class="nav-item">
                  <a href="<?= base_url('/dashboard'); ?>" class="nav-link">
                      <i class="nav-icon bi bi-speedometer"></i>
                      <p>Dashboard</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon bi bi-box-seam-fill"></i>
                      <p>
                          Pendaftaran
                          <i class="nav-arrow bi bi-chevron-right"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="<?= base_url('/sr_player'); ?>" class="nav-link">
                              <i class="nav-icon bi bi-circle"></i>
                              <p>Pemain</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="<?= base_url('/sr_official'); ?>" class="nav-link">
                              <i class="nav-icon bi bi-circle"></i>
                              <p>Official</p>
                          </a>
                      </li>
                  </ul>
              </li>

              <li class="nav-item">
                  <a href="<?= base_url('/players'); ?>" class="nav-link">
                      <i class="nav-icon bi bi-person-circle"></i>
                      <p>Database Pemain</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="<?= base_url('/official'); ?>" class="nav-link">
                      <i class="nav-icon bi bi-person-badge"></i>
                      <p>Database Official</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon bi bi-box-seam-fill"></i>
                      <p>
                          Kompetisi
                          <i class="nav-arrow bi bi-chevron-right"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="<?= base_url('/sr_player'); ?>" class="nav-link">
                              <i class="nav-icon bi bi-circle"></i>
                              <p>Pendaftaran Pemain</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="<?= base_url('/sr_official'); ?>" class="nav-link">
                              <i class="nav-icon bi bi-circle"></i>
                              <p>Pendaftaran Official</p>
                          </a>
                      </li>
                  </ul>
              </li>

          </ul>
          <!--end::Sidebar Menu-->
      </nav>
  </div>