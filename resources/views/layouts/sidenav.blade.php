<div class="ui sidebar inverted vertical menu left uncover bg-dark" style=" color: #fff;">

    <h2 class="brand"><span>K</span> VECTOR</h2>

    <div id="accordion" role="tablist">


        <div class="card bg-dark">
            <div class="card-header" role="tab" id="headingThree" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <h5 class="mb-0">
                    <span>
                                        Projects
                                    </span>
                    <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                </h5>
            </div>
            <div id="collapseThree" class="collapse<?php if(isset($project)) {echo 'show';} ?>" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body side">
                    <div class="list-group">
                        <a href="{{ url('/projects/magazine') }}" class="list-group-item list-group-item-dark <?php if(isset($project)) { if($project == 'magazine') {echo 'active';} } ?>">Magazine</a>
                        <a href="{{ url('/projects/events') }}" class="list-group-item list-group-item-action list-group-item-dark <?php if(isset($project)) { if($project == 'events') {echo 'active';} } ?>">Events</a>
                        <a href="{{ url('/projects/academic') }}" class="list-group-item list-group-item-action list-group-item-dark <?php if(isset($project)) { if($project == 'academic') {echo 'active';} } ?>">Academic</a>
                        <a href="{{ url('/projects/juniors') }}" class="list-group-item list-group-item-action list-group-item-dark <?php if(isset($project)) { if($project == 'juniors') {echo 'active';} } ?>">Juniors</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card bg-dark">
            <div class="card-header collapsed" role="tab" id="headingTwo" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <h5 class="mb-0">
                    <span>
                        Magazine
                    </span>
                    <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse<?php if(isset($magazine)) {echo 'show';} ?>" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body side">
                    <div class="list-group">
                        <a href="../magazine/sept_maga.php" class="list-group-item list-group-item-dark <?php if(isset($magazine)) { if($magazine == 'sept') {echo 'active';} } ?>">September</a>

                        <a href="../oct_magazine/oct_maga.php" class="list-group-item list-group-item-dark <?php if(isset($magazine)) { if($magazine == 'oct') {echo 'active';} } ?>">October</a>
                        <a href="../nov_magazine/nov_maga.php" class="list-group-item list-group-item-dark <?php if(isset($magazine)) { if($magazine == 'nov') {echo 'active';} } ?>">November</a>
                        <a href="../dec_magazine/dec_maga.php" class="list-group-item list-group-item-dark <?php if(isset($magazine)) { if($magazine == 'dec') {echo 'active';} } ?>">December</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card bg-dark">
            <a href="{{ url('events') }}" style="color: inherit; text-decoration: none;">
                <div class="card-header collapsed" role="tab" id="headingFour">
                    <h5 class="mb-0">
                        <span>
                            Events
                        </span>
                    </h5>
                </div>
            </a>
        </div>

        <div class="card bg-dark">
            <a href="{{ url('/about') }}" style="color: inherit; text-decoration: none;">
                <div class="card-header collapsed" role="tab" id="headingOne">
                    <h5 class="mb-0">
                        <span>
                            About Us
                        </span>
                    </h5>
                </div>
            </a>
        </div>

        <div class="card bg-dark">
            <a href="{{ url('game') }}" style="color: inherit; text-decoration: none;">
                <div class="card-header collapsed" role="tab" id="headingFive">
                    <h5 class="mb-0">
                        <span>
                            Puzzle Game
                        </span>
                    </h5>
                </div>
            </a>
        </div>

    </div>
</div>