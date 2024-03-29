<?php

use app\models\Page;
use app\migrations\Migration;

class m170202_080949_add_new_faq_on_page_table extends Migration
{
    public function safeUp()
    {
        $this->insert('page', [
            'name' => 'FAQ',
            'slug' => 'faq',
            'category' => Page::CATEGORY_FULL,
            'description' => '<div class="container">

              <div class="text-center mb-80">
                  <h2 class="section-title text-capitalize">Frequently asked questions</h2>
                  <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam. Nulla ac nisi rhoncus,</p>
              </div>

              <div class="row mb-80">
                <div class="col-md-8 col-md-offset-2">
                  <h2 class="mb-30">Pre-sale questions</h2>
                  <div class="panel-group feature-accordion brand-accordion icon angle-icon" id="basic">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">
                          <a data-toggle="collapse" data-parent="#basic" href="#basic-one">
                            01. Why i will purchase materialize theme to build my project?
                          </a>
                        </h3>
                      </div>
                      <div id="basic-one" class="panel-collapse collapse in">
                        <div class="panel-body">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt maiores placeat obcaecati, beatae. Facilis dolore ipsam facere perferendis deserunt commodi blanditiis nisi accusamus omnis, animi vel tenetur cumque, sed veritatis?
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#basic" href="#basic-two">
                            02. How to install or modify this theme?
                          </a>
                        </h3>
                      </div>
                      <div id="basic-two" class="panel-collapse collapse">
                        <div class="panel-body">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt maiores placeat obcaecati, beatae. Facilis dolore ipsam facere perferendis deserunt commodi blanditiis nisi accusamus omnis, animi vel tenetur cumque, sed veritatis?
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#basic" href="#basic-three">
                            03. How to deposit money in themeforest?
                          </a>
                        </h3>
                      </div>
                      <div id="basic-three" class="panel-collapse collapse">
                        <div class="panel-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#basic" href="#basic-four">
                            04. Can i get support after purchasing this theme?
                          </a>
                        </h3>
                      </div>
                      <div id="basic-four" class="panel-collapse collapse">
                        <div class="panel-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div><!-- /.col-md-8 -->
              </div><!-- /.row -->

              <div class="row mb-80">
                <div class="col-md-8 col-md-offset-2">
                  <h2 class="mb-30">Installation</h2>
                  <div class="panel-group feature-accordion brand-accordion icon angle-icon" id="installation">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">
                          <a data-toggle="collapse" data-parent="#installation" href="#installation-one">
                            01. Why i will purchase materialize theme to build my project?
                          </a>
                        </h3>
                      </div>
                      <div id="installation-one" class="panel-collapse collapse in">
                        <div class="panel-body">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt maiores placeat obcaecati, beatae. Facilis dolore ipsam facere perferendis deserunt commodi blanditiis nisi accusamus omnis, animi vel tenetur cumque, sed veritatis?
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#installation" href="#installation-two">
                            02. How to install or modify this theme?
                          </a>
                        </h3>
                      </div>
                      <div id="installation-two" class="panel-collapse collapse">
                        <div class="panel-body">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt maiores placeat obcaecati, beatae. Facilis dolore ipsam facere perferendis deserunt commodi blanditiis nisi accusamus omnis, animi vel tenetur cumque, sed veritatis?
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#installation" href="#installation-three">
                            03. How to deposit money in themeforest?
                          </a>
                        </h3>
                      </div>
                      <div id="installation-three" class="panel-collapse collapse">
                        <div class="panel-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#installation" href="#installation-four">
                            04. Can i get support after purchasing this theme?
                          </a>
                        </h3>
                      </div>
                      <div id="installation-four" class="panel-collapse collapse">
                        <div class="panel-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div><!-- /.col-md-8 -->
              </div><!-- /.row -->

              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <h2 class="mb-30">Support</h2>
                  <div class="panel-group feature-accordion brand-accordion icon angle-icon" id="support">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">
                          <a data-toggle="collapse" data-parent="#support" href="#support-one">
                            01. Why i will purchase materialize theme to build my project?
                          </a>
                        </h3>
                      </div>
                      <div id="support-one" class="panel-collapse collapse in">
                        <div class="panel-body">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt maiores placeat obcaecati, beatae. Facilis dolore ipsam facere perferendis deserunt commodi blanditiis nisi accusamus omnis, animi vel tenetur cumque, sed veritatis?
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#support" href="#support-two">
                            02. How to install or modify this theme?
                          </a>
                        </h3>
                      </div>
                      <div id="support-two" class="panel-collapse collapse">
                        <div class="panel-body">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt maiores placeat obcaecati, beatae. Facilis dolore ipsam facere perferendis deserunt commodi blanditiis nisi accusamus omnis, animi vel tenetur cumque, sed veritatis?
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#support" href="#support-three">
                            03. How to deposit money in themeforest?
                          </a>
                        </h3>
                      </div>
                      <div id="support-three" class="panel-collapse collapse">
                        <div class="panel-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#support" href="#support-four">
                            04. Can i get support after purchasing this theme?
                          </a>
                        </h3>
                      </div>
                      <div id="support-four" class="panel-collapse collapse">
                        <div class="panel-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div><!-- /.col-md-8 -->
              </div><!-- /.row -->

            </div><!-- /.container -->',
            'status' => Page::STATUS_ACTIVE,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }

    public function safeDown()
    {
        $this->delete('page', 'slug = "faq"');
    }
}
