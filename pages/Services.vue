<template>
  <div>
    <global-page-title pageTitle="Services" />
    <div class="layer-wrapper">
      <!-- row separator -->
      <div class="display-flex">
        <div class="card">
          <div class="service-card service-card-2">
            <div class="tbl-cell">
              <div class="service-icon">
                <i class="ti-mobile text-primary"></i>
              </div>
            </div>
            <div class="tbl-cell">
              <div class="service-heading">Responsive Design</div>
              <div class="service-body">
                <p>Over 60% of vistor's on the web today use mobile devices. With this in mind, we focus on building website's that look great on any device.</p>
                <!-- <a href="#" class="link-icon">
                  <span>&nbsp;</span>
                </a>-->
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="service-card service-card-2">
            <div class="tbl-cell">
              <div class="service-icon">
                <i class="ti-gallery text-success"></i>
              </div>
            </div>
            <div class="tbl-cell">
              <div class="service-heading">Web Design</div>
              <div class="service-body">
                <p>Full website design and development services at realistic prices.</p>
                <a href="#" class="link-icon">
                  <span>&nbsp;</span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="service-card service-card-2">
            <div class="tbl-cell">
              <div class="service-icon">
                <div class="service-icon">
                  <i class="icon-people text-info"></i>
                </div>
              </div>
            </div>
            <div class="tbl-cell">
              <div class="service-heading">Content Marketing</div>
              <div class="service-body">
                <p>Strategic marketing services providing a comprehensive guideline on what works best for your business.</p>
                <a href="#" class="link-icon">
                  <!-- <span>&nbsp;</span> -->
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="service-card service-card-2">
            <div class="tbl-cell">
              <div class="service-icon">
                <div class="service-icon">
                  <i class="ti-shopping-cart text-warning"></i>
                </div>
              </div>
            </div>
            <div class="tbl-cell">
              <div class="service-heading">E-Commerce Solutions</div>
              <div class="service-body">
                <p>E-Commerce solutions, providing secure services with a strong focus on conversion optimisation</p>
                <!-- <a href="#" class="link-icon">
                  <span>&nbsp;</span>
                </a>-->
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="service-card service-card-2">
            <div class="tbl-cell">
              <div class="service-icon">
                <i class="fab fa-wordpress fa-3x text-medium"></i>
                <!-- <i class="ti-mobile text-secondary"></i> -->
              </div>
            </div>
            <div class="tbl-cell">
              <div class="service-heading">Wordpress CMS</div>
              <div class="service-body">
                <p>Update your own content, without the added cost of a professional to do it for you.</p>
                <a href="#" class="link-icon">
                  <span>&nbsp;</span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="service-card service-card-2">
            <div class="tbl-cell">
              <div class="service-icon">
                <i class="ti-pencil-alt text-danger"></i>
              </div>
            </div>
            <div class="tbl-cell">
              <div class="service-heading">Clean Code</div>
              <div class="service-body">
                <p>Quality front-end and back-end web development, using industry standard best practices.</p>
                <a href="#" class="link-icon">
                  <span>&nbsp;</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Services'
}
</script>

<style lang="scss">
@import '@/assets/scss/main.scss';
.text-warning {
  color: #ffc107 !important;
}
.text-primary {
  color: #007bff !important;
}
.text-success {
  color: #28a745 !important;
}
.text-info {
  color: #17a2b8 !important;
}
.text-muted {
  color: #6c757d !important;
}
.text-secondary {
  color: #c12ad4 !important;
}
.text-danger {
  color: #dc3545 !important;
}
.text-medium {
  color: $color-grey-medium;
}
</style>