<?php
/*
Template Name: home
*/
?>

<?php get_header();?>

     <div class="main">
        <div class="container">
            <section class="listen">
                <div class="listen__img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/content/episodies/1.jpg" alt="">
                </div>
                <h2 class="listen__name">
                    <a href=""><?php echo get_post_meta($post->ID,'listen__name', true);?></a> </h2>
                <div class="listen__player">
                    <audio controls>
                        <source src="" type="audio/mpeg">
                        <p>
                          Ваш браузер не поддерживает встроенное аудио. Попробуйте
                          <a href="" download>скачать</a> файл.
                        </p>
                    </audio>
                      
                </div>
                <p class="listen__where">Listen on</p>
                <ul class="listen__on">
                    <li class="listen__on-item">
                        <a href="" class="listen__on-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <g clip-path="url(#clip0_492_127)">
                                  <path d="M12 24C18.624 24 24 18.624 24 12C24 5.376 18.624 0 12 0C5.376 0 0 5.376 0 12C0 18.624 5.376 24 12 24ZM16.872 17.656V17.657C16.065 17.657 13.516 14.829 6.352 16.297C6.163 16.346 5.916 16.423 5.776 16.423C4.861 16.423 4.686 15.054 5.67 14.845C9.633 13.97 13.683 14.047 17.137 16.113C17.961 16.639 17.611 17.656 16.872 17.656ZM18.175 14.483C18.062 14.453 18.095 14.552 17.578 14.28C14.553 12.49 10.045 11.768 6.033 12.857C5.801 12.92 5.675 12.983 5.457 12.983C4.386 12.983 4.102 11.372 5.269 11.043C9.985 9.718 15.044 10.491 18.566 12.586C18.958 12.818 19.113 13.119 19.113 13.539C19.108 14.061 18.702 14.483 18.175 14.483ZM4.548 6.998C9.071 5.674 15.916 6.092 20.172 8.576C21.263 9.205 20.834 10.796 19.674 10.796L19.673 10.795C19.421 10.795 19.266 10.732 19.048 10.606C15.605 8.55 9.444 8.057 5.458 9.17C5.283 9.218 5.065 9.295 4.833 9.295C4.194 9.295 3.706 8.796 3.706 8.153C3.706 7.496 4.113 7.124 4.548 6.998Z" fill="#222222"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_492_127">
                                    <rect width="24" height="24" fill="white"/>
                                  </clipPath>
                                </defs>
                              </svg>
                        </a>
                    </li>
                    <li class="listen__on-item">
                        <a href="" class="listen__on-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                <g clip-path="url(#clip0_492_130)">
                                  <path d="M25.3125 13.75C24.9788 13.75 24.6513 13.7862 24.335 13.8525C23.9138 9.59125 20.3075 6.25 15.9375 6.25C15.42 6.25 15 6.67 15 7.1875V22.1875C15 22.705 15.42 23.125 15.9375 23.125H25.3125C27.8988 23.125 30 21.0237 30 18.4375C30 15.8537 27.8988 13.75 25.3125 13.75Z" fill="#222222"/>
                                  <path d="M11.25 9.0625V22.1875C11.25 22.705 11.67 23.125 12.1875 23.125C12.705 23.125 13.125 22.705 13.125 22.1875V9.0625C13.125 8.545 12.705 8.125 12.1875 8.125C11.67 8.125 11.25 8.545 11.25 9.0625Z" fill="#222222"/>
                                  <path d="M7.5 12.8125V22.1875C7.5 22.705 7.92 23.125 8.4375 23.125C8.955 23.125 9.375 22.705 9.375 22.1875V12.8125C9.375 12.295 8.955 11.875 8.4375 11.875C7.92 11.875 7.5 12.295 7.5 12.8125Z" fill="#222222"/>
                                  <path d="M3.75 22.1875C3.75 22.705 4.17 23.125 4.6875 23.125C5.205 23.125 5.625 22.705 5.625 22.1875V12.8125C5.625 12.295 5.205 11.875 4.6875 11.875C4.17 11.875 3.75 12.295 3.75 12.8125V22.1875Z" fill="#222222"/>
                                  <path d="M0.9375 23.125C1.455 23.125 1.875 22.705 1.875 22.1875V16.5625C1.875 16.045 1.455 15.625 0.9375 15.625C0.42 15.625 0 16.045 0 16.5625V22.1875C0 22.705 0.42 23.125 0.9375 23.125Z" fill="#222222"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_492_130">
                                    <rect width="30" height="30" fill="white"/>
                                  </clipPath>
                                </defs>
                              </svg>
                        </a>
                    </li>
                    <li class="listen__on-item">
                        <a href="" class="listen__on-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="24" viewBox="0 0 22 24" fill="none">
                                <path d="M7.23364 23.9999C3.27473 23.9794 0 16.6879 0 12.9745C0 6.90873 5.04338 5.58077 6.98706 5.58077C7.863 5.58077 8.79832 5.89112 9.62329 6.16576C10.2002 6.35734 10.7968 6.5551 11.1286 6.5551C11.3273 6.5551 11.7953 6.38687 12.2085 6.23926C13.0898 5.92272 14.1865 5.5293 15.4635 5.5293C15.4658 5.5293 15.4688 5.5293 15.4711 5.5293C16.4246 5.5293 19.3158 5.71811 21.054 8.07328L21.4612 8.62533L20.8752 9.02428C20.0381 9.59418 18.5107 10.6338 18.5107 12.693C18.5107 15.132 20.2405 16.0699 21.0715 16.5211C21.4384 16.7202 21.8181 16.9255 21.8181 17.3746C21.8181 17.6678 19.2245 23.9636 15.4581 23.9636C14.5365 23.9636 13.8851 23.7136 13.3105 23.4932C12.7291 23.27 12.2275 23.0778 11.3987 23.0778C10.9786 23.0778 10.4474 23.257 9.88503 23.4472C9.11648 23.706 8.24657 23.9999 7.25951 23.9999H7.23364Z" fill="#222222"/>
                                <path d="M15.8606 0C15.9587 3.19105 13.4294 5.40485 10.903 5.26601C10.4867 2.71944 13.429 0 15.8606 0Z" fill="#222222"/>
                              </svg>
                        </a>
                    </li>
                </ul>
            </section>

            <section class="episodes">
                <h2 class="episodes__title"></h2>
                <div class="episodes__box">
                    <div class="episode">
                        <div class="episode__tag">
                            <a>Business</p>
                            <a>Jan 18, 2021</a>
                        </div>
                        <h3 class="episode__title">
                            <a href="">23 - How to rapidly test any experience!</a>
                        </h3>
                        <p class="episode__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consect adipiscing elit. Sed at arcu dui. Aenean placerat mauris nisl...</p>
                        
                        <button class="episode__btn-listen">
                            <div class="btn-play">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_2109_705)">
                                      <path d="M12 0C5.3828 0 0 5.38331 0 12C0 18.6167 5.3828 24 12 24C18.6172 24 24 18.6167 24 12C24 5.38331 18.6172 0 12 0ZM16.7705 12.4204L9.77053 16.9204C9.6885 16.9736 9.59377 17 9.50002 17C9.41798 17 9.33497 16.9795 9.26077 16.939C9.09961 16.8511 9 16.6831 9 16.5V7.5C9 7.31691 9.09961 7.14891 9.26077 7.06102C9.41897 6.97411 9.6172 6.97945 9.77053 7.07958L16.7705 11.5796C16.9131 11.6714 17 11.8301 17 12C17 12.1699 16.9131 12.3286 16.7705 12.4204Z" fill="#7247CA"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_2109_705">
                                        <rect width="24" height="24" fill="white"/>
                                      </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <p class="btn-text">listen now</p>
                        </button>

                    </div>
                    <div class="episode">
                        <div class="episode__tag">
                            <a>Business</a>
                            <a>Jan 18, 2021</a>
                        </div>
                        <h3 class="episode__title">
                            <a href="">23 - How to rapidly test any experience!</a>
                        </h3>
                        <p class="episode__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consect adipiscing elit. Sed at arcu dui. Aenean placerat mauris nisl...</p>
                        
                        <button class="episode__btn-listen">
                            <div class="btn-play">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_2109_705)">
                                      <path d="M12 0C5.3828 0 0 5.38331 0 12C0 18.6167 5.3828 24 12 24C18.6172 24 24 18.6167 24 12C24 5.38331 18.6172 0 12 0ZM16.7705 12.4204L9.77053 16.9204C9.6885 16.9736 9.59377 17 9.50002 17C9.41798 17 9.33497 16.9795 9.26077 16.939C9.09961 16.8511 9 16.6831 9 16.5V7.5C9 7.31691 9.09961 7.14891 9.26077 7.06102C9.41897 6.97411 9.6172 6.97945 9.77053 7.07958L16.7705 11.5796C16.9131 11.6714 17 11.8301 17 12C17 12.1699 16.9131 12.3286 16.7705 12.4204Z" fill="#7247CA"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_2109_705">
                                        <rect width="24" height="24" fill="white"/>
                                      </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <p class="btn-text">listen now</p>
                        </button>

                    </div>
                </div>


            </section>

           <section class="team">
                <h3 class="team__title title">Team</h3>
                <div class="team__cards">
                    <div class="team__card">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/content/team/1.jpg" alt="" class="team__card-photo">
                        <p class="team__card-title">Position</p>
                        <p class="team__card-name">Aida Cave</p>
                        <ul class="team__card-socials socials">
                            <li class="socials__item"><a href="" class="socials-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1.43237C0 0.648037 0.632066 0.012207 1.41176 0.012207C1.78618 0.012207 2.14527 0.161831 2.41002 0.428164C2.67478 0.694497 2.82352 1.05572 2.82352 1.43237C2.82352 2.21671 2.19145 2.85254 1.41176 2.85254C0.632066 2.85254 0 2.21671 0 1.43237ZM12.3545 7.40458C12.3789 5.86712 11.3362 4.51983 9.84866 4.16647C8.85177 3.95052 7.81267 4.23369 7.06043 4.92629V4.62804C7.06043 4.43195 6.90241 4.27298 6.70749 4.27298H4.94278C4.74786 4.27298 4.58984 4.43195 4.58984 4.62804V11.7292C4.58984 11.9253 4.74786 12.0842 4.94278 12.0842H6.70749C6.90241 12.0842 7.06043 11.9253 7.06043 11.7292V7.72413C7.043 7.01098 7.53707 6.38818 8.23219 6.2471C8.64608 6.17522 9.0703 6.29248 9.38959 6.56701C9.70887 6.84154 9.89007 7.24483 9.88395 7.66733V11.7292C9.88395 11.9253 10.042 12.0842 10.2369 12.0842H12.0016C12.1965 12.0842 12.3545 11.9253 12.3545 11.7292V7.40458ZM2.82214 4.62777V11.7292C2.82214 11.9253 2.66413 12.0842 2.4692 12.0842H0.704503C0.509579 12.0842 0.351562 11.9253 0.351562 11.7292V4.62777C0.351562 4.43167 0.509579 4.27271 0.704503 4.27271H2.4692C2.66413 4.27271 2.82214 4.43167 2.82214 4.62777Z" fill="#555555"/>
                                </svg>
                            </a></li>
                            <li class="socials__item"><a href="" class="socials-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                    <path d="M12.3015 6.20449C12.2995 8.86647 10.6052 11.2288 8.0947 12.07C8.00074 12.0991 7.89867 12.0831 7.81794 12.0266C7.73722 11.9676 7.68926 11.8734 7.68879 11.773V10.121C7.70209 9.67604 7.59585 9.23573 7.38127 8.84643C7.34881 8.79553 7.34881 8.73027 7.38127 8.67937C7.40621 8.63243 7.4519 8.60026 7.50428 8.59275C9.00495 8.43807 9.84139 7.83791 9.84139 6.20449C9.87757 5.44183 9.61476 4.69534 9.1095 4.12559C9.18319 3.88491 9.22254 3.63493 9.22636 3.38313C9.22372 3.15737 9.19272 2.93285 9.13411 2.71491C9.09543 2.56958 8.95668 2.47477 8.80814 2.49217C8.24462 2.57263 7.72006 2.82784 7.30747 3.22226C6.54369 3.0738 5.75873 3.0738 4.99495 3.22226C4.58236 2.82784 4.0578 2.57263 3.49428 2.49217C3.34574 2.47477 3.20698 2.56958 3.16831 2.71491C3.10969 2.93285 3.0787 3.15737 3.07606 3.38313C3.07988 3.63493 3.11923 3.88491 3.19291 4.12559C2.68765 4.69534 2.42485 5.44183 2.46103 6.20449C2.46103 7.92453 3.38972 8.49994 5.09336 8.64225C4.88188 8.92104 4.7367 9.24487 4.66899 9.58889C4.66899 9.58889 4.66899 9.6322 4.66899 9.66314C4.66602 9.69193 4.66602 9.72096 4.66899 9.74976C4.64339 9.94426 4.46955 10.0836 4.27537 10.0653C4.18278 10.0609 4.09237 10.0355 4.0109 9.99106C3.67584 9.78576 3.38005 9.52172 3.13756 9.21147C2.98306 9.03523 2.81879 8.86791 2.64554 8.71031C2.53545 8.61444 2.41348 8.53333 2.28267 8.46901C2.191 8.4172 2.07912 8.4172 1.98745 8.46901C1.89945 8.5258 1.84617 8.62369 1.846 8.72887V8.76599C1.84617 8.87117 1.89945 8.96906 1.98745 9.02585C2.20823 9.21176 2.39909 9.43091 2.55328 9.67551C2.81367 10.086 3.14484 10.4464 3.53118 10.7397C3.78573 10.9114 4.08577 11.0019 4.39222 10.9996H4.61363V11.773C4.61316 11.8734 4.5652 11.9676 4.48448 12.0266C4.40375 12.0831 4.30168 12.0991 4.20771 12.07C1.22607 11.0709 -0.527257 7.97124 0.141976 4.88223C0.81121 1.79322 3.6877 -0.29134 6.81217 0.0484243C9.93665 0.388189 12.3039 3.04296 12.3015 6.20449Z" fill="#555555"/>
                                </svg>
                            </a></li>
                            <li class="socials__item"><a href="" class="socials-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                    <path d="M13.9659 3.14924C13.6244 3.60751 13.2116 4.00725 12.7435 4.33304C12.7435 4.45275 12.7435 4.57246 12.7435 4.69882C12.7473 6.87275 11.8841 8.95725 10.3475 10.485C8.81094 12.0128 6.72949 12.8561 4.56978 12.8258C3.32121 12.83 2.08862 12.5432 0.968582 11.9878C0.908189 11.9613 0.869237 11.9012 0.869466 11.8349V11.7617C0.869466 11.6662 0.946384 11.5888 1.04127 11.5888C2.26858 11.5481 3.45212 11.12 4.42441 10.3651C3.31352 10.3426 2.314 9.68055 1.85401 8.66256C1.83078 8.60696 1.83801 8.54318 1.8731 8.49428C1.90819 8.44538 1.96607 8.41842 2.02581 8.42314C2.36344 8.45728 2.70444 8.42567 3.03019 8.33003C1.80385 8.07394 0.882402 7.04973 0.750528 5.79617C0.745841 5.73603 0.772629 5.67778 0.821214 5.64247C0.8698 5.60715 0.93316 5.59987 0.988405 5.62325C1.3175 5.76934 1.67276 5.84628 2.03242 5.84937C0.957864 5.13985 0.493727 3.79031 0.902505 2.56399C0.9447 2.44483 1.04607 2.3568 1.16938 2.33225C1.29268 2.30771 1.41971 2.35026 1.50381 2.44428C2.95385 3.99684 4.94625 4.922 7.06089 5.0247C7.00672 4.80726 6.98008 4.58381 6.98159 4.35965C7.00137 3.18424 7.72429 2.13717 8.81192 1.70863C9.89954 1.28009 11.1366 1.55489 11.944 2.40438C12.4943 2.29891 13.0264 2.11294 13.5232 1.85238C13.5596 1.82953 13.6058 1.82953 13.6422 1.85238C13.6649 1.88901 13.6649 1.93546 13.6422 1.97209C13.4015 2.52649 12.995 2.99147 12.4792 3.30221C12.9308 3.24952 13.3745 3.14234 13.8007 2.98298C13.8366 2.95841 13.8838 2.95841 13.9197 2.98298C13.9497 2.99682 13.9722 3.02328 13.9811 3.05531C13.99 3.08735 13.9845 3.12171 13.9659 3.14924Z" fill="#555555"/>
                                  </svg>
                            </a></li>
                        </ul>
                    </div>
                    <div class="team__card">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/content/team/2.jpg" alt="" class="team__card-photo">
                        <p class="team__card-title">Position</p>
                        <p class="team__card-name">Nick Carleton</p>
                        <ul class="team__card-socials socials">
                            <li class="socials__item"><a href="" class="socials-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1.43237C0 0.648037 0.632066 0.012207 1.41176 0.012207C1.78618 0.012207 2.14527 0.161831 2.41002 0.428164C2.67478 0.694497 2.82352 1.05572 2.82352 1.43237C2.82352 2.21671 2.19145 2.85254 1.41176 2.85254C0.632066 2.85254 0 2.21671 0 1.43237ZM12.3545 7.40458C12.3789 5.86712 11.3362 4.51983 9.84866 4.16647C8.85177 3.95052 7.81267 4.23369 7.06043 4.92629V4.62804C7.06043 4.43195 6.90241 4.27298 6.70749 4.27298H4.94278C4.74786 4.27298 4.58984 4.43195 4.58984 4.62804V11.7292C4.58984 11.9253 4.74786 12.0842 4.94278 12.0842H6.70749C6.90241 12.0842 7.06043 11.9253 7.06043 11.7292V7.72413C7.043 7.01098 7.53707 6.38818 8.23219 6.2471C8.64608 6.17522 9.0703 6.29248 9.38959 6.56701C9.70887 6.84154 9.89007 7.24483 9.88395 7.66733V11.7292C9.88395 11.9253 10.042 12.0842 10.2369 12.0842H12.0016C12.1965 12.0842 12.3545 11.9253 12.3545 11.7292V7.40458ZM2.82214 4.62777V11.7292C2.82214 11.9253 2.66413 12.0842 2.4692 12.0842H0.704503C0.509579 12.0842 0.351562 11.9253 0.351562 11.7292V4.62777C0.351562 4.43167 0.509579 4.27271 0.704503 4.27271H2.4692C2.66413 4.27271 2.82214 4.43167 2.82214 4.62777Z" fill="#555555"/>
                                </svg>
                            </a></li>
                            <li class="socials__item"><a href="" class="socials-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                    <path d="M12.3015 6.20449C12.2995 8.86647 10.6052 11.2288 8.0947 12.07C8.00074 12.0991 7.89867 12.0831 7.81794 12.0266C7.73722 11.9676 7.68926 11.8734 7.68879 11.773V10.121C7.70209 9.67604 7.59585 9.23573 7.38127 8.84643C7.34881 8.79553 7.34881 8.73027 7.38127 8.67937C7.40621 8.63243 7.4519 8.60026 7.50428 8.59275C9.00495 8.43807 9.84139 7.83791 9.84139 6.20449C9.87757 5.44183 9.61476 4.69534 9.1095 4.12559C9.18319 3.88491 9.22254 3.63493 9.22636 3.38313C9.22372 3.15737 9.19272 2.93285 9.13411 2.71491C9.09543 2.56958 8.95668 2.47477 8.80814 2.49217C8.24462 2.57263 7.72006 2.82784 7.30747 3.22226C6.54369 3.0738 5.75873 3.0738 4.99495 3.22226C4.58236 2.82784 4.0578 2.57263 3.49428 2.49217C3.34574 2.47477 3.20698 2.56958 3.16831 2.71491C3.10969 2.93285 3.0787 3.15737 3.07606 3.38313C3.07988 3.63493 3.11923 3.88491 3.19291 4.12559C2.68765 4.69534 2.42485 5.44183 2.46103 6.20449C2.46103 7.92453 3.38972 8.49994 5.09336 8.64225C4.88188 8.92104 4.7367 9.24487 4.66899 9.58889C4.66899 9.58889 4.66899 9.6322 4.66899 9.66314C4.66602 9.69193 4.66602 9.72096 4.66899 9.74976C4.64339 9.94426 4.46955 10.0836 4.27537 10.0653C4.18278 10.0609 4.09237 10.0355 4.0109 9.99106C3.67584 9.78576 3.38005 9.52172 3.13756 9.21147C2.98306 9.03523 2.81879 8.86791 2.64554 8.71031C2.53545 8.61444 2.41348 8.53333 2.28267 8.46901C2.191 8.4172 2.07912 8.4172 1.98745 8.46901C1.89945 8.5258 1.84617 8.62369 1.846 8.72887V8.76599C1.84617 8.87117 1.89945 8.96906 1.98745 9.02585C2.20823 9.21176 2.39909 9.43091 2.55328 9.67551C2.81367 10.086 3.14484 10.4464 3.53118 10.7397C3.78573 10.9114 4.08577 11.0019 4.39222 10.9996H4.61363V11.773C4.61316 11.8734 4.5652 11.9676 4.48448 12.0266C4.40375 12.0831 4.30168 12.0991 4.20771 12.07C1.22607 11.0709 -0.527257 7.97124 0.141976 4.88223C0.81121 1.79322 3.6877 -0.29134 6.81217 0.0484243C9.93665 0.388189 12.3039 3.04296 12.3015 6.20449Z" fill="#555555"/>
                                </svg>
                            </a></li>
                            <li class="socials__item"><a href="" class="socials-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                    <path d="M13.9659 3.14924C13.6244 3.60751 13.2116 4.00725 12.7435 4.33304C12.7435 4.45275 12.7435 4.57246 12.7435 4.69882C12.7473 6.87275 11.8841 8.95725 10.3475 10.485C8.81094 12.0128 6.72949 12.8561 4.56978 12.8258C3.32121 12.83 2.08862 12.5432 0.968582 11.9878C0.908189 11.9613 0.869237 11.9012 0.869466 11.8349V11.7617C0.869466 11.6662 0.946384 11.5888 1.04127 11.5888C2.26858 11.5481 3.45212 11.12 4.42441 10.3651C3.31352 10.3426 2.314 9.68055 1.85401 8.66256C1.83078 8.60696 1.83801 8.54318 1.8731 8.49428C1.90819 8.44538 1.96607 8.41842 2.02581 8.42314C2.36344 8.45728 2.70444 8.42567 3.03019 8.33003C1.80385 8.07394 0.882402 7.04973 0.750528 5.79617C0.745841 5.73603 0.772629 5.67778 0.821214 5.64247C0.8698 5.60715 0.93316 5.59987 0.988405 5.62325C1.3175 5.76934 1.67276 5.84628 2.03242 5.84937C0.957864 5.13985 0.493727 3.79031 0.902505 2.56399C0.9447 2.44483 1.04607 2.3568 1.16938 2.33225C1.29268 2.30771 1.41971 2.35026 1.50381 2.44428C2.95385 3.99684 4.94625 4.922 7.06089 5.0247C7.00672 4.80726 6.98008 4.58381 6.98159 4.35965C7.00137 3.18424 7.72429 2.13717 8.81192 1.70863C9.89954 1.28009 11.1366 1.55489 11.944 2.40438C12.4943 2.29891 13.0264 2.11294 13.5232 1.85238C13.5596 1.82953 13.6058 1.82953 13.6422 1.85238C13.6649 1.88901 13.6649 1.93546 13.6422 1.97209C13.4015 2.52649 12.995 2.99147 12.4792 3.30221C12.9308 3.24952 13.3745 3.14234 13.8007 2.98298C13.8366 2.95841 13.8838 2.95841 13.9197 2.98298C13.9497 2.99682 13.9722 3.02328 13.9811 3.05531C13.99 3.08735 13.9845 3.12171 13.9659 3.14924Z" fill="#555555"/>
                                  </svg>
                            </a></li>
                        </ul>
                    </div>
                </div>
            </section>

             <section class="latest-Posts">
                <h2 class="latest-Posts__title title">Latest Posts</h2>
                <div class="latest-Posts__box">

                    <?php
                        $args = array (
                            'numberposts' => 2,
                            'post_type' => 'post',
                            'suppress_filters' => true,

                        );

                        $posts = get_posts($args) ;
                        foreach( $posts as $post ){

                        
                    ?>


                     <div class="post-preview">
                         <div class="post-preview__img">
                             <img src="<?php bloginfo('template_url'); ?>/assets/images/content/posts/1.jpg" alt="">
                         </div>
                         <div class="post-preview__wrapper">
                             <h3 class="post-preview__title"><?php the_title(); ?></h3>
                             <p class="post-preview__date"><?php the_time(' M n, Y' ); ?></p>
                             <a href="<?php echo get_permalink(); ?>" class="post-preview__more">Read More</a>
                         </div>
                     </div>
                    
                     <?php
                        }
                        wp_reset_postdata();
                    ?>


                </div>
                <div class="latest-Posts__view">
                    <a href="http://host1866627.hostland.pro/blog/">View Blog</a>
                    <div class="latest-Posts__view-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="5" height="8" viewBox="0 0 5 8" fill="none">
                            <path d="M0.0557556 0.768491C0.0200717 0.730943 0 0.679832 0 0.626512C0 0.573193 0.0200717 0.522081 0.0557556 0.484534L0.455359 0.0605983C0.489564 0.0219332 0.53732 0 0.587303 0C0.637286 0 0.685042 0.0219332 0.719247 0.0605983L4.18373 3.73604C4.23677 3.79224 4.2666 3.86848 4.26667 3.94801V4.05199C4.2666 4.13152 4.23677 4.20776 4.18373 4.26396L0.719247 7.9394C0.685042 7.97807 0.637286 8 0.587303 8C0.53732 8 0.489564 7.97807 0.455359 7.9394L0.0557556 7.51547C0.0200717 7.47792 0 7.42681 0 7.37349C0 7.32017 0.0200717 7.26906 0.0557556 7.23151L3.10179 4L0.0557556 0.768491Z" fill="#7247CA"/>
                        </svg>
                    </div>
                </div>
            </section> 

        </div>
    </div>  
    <?php get_footer();?>