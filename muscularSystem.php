<?php 

    $pageTitle = "Muscular System";
    $pageDescription = "";
    include('../muscularSystem/includes/header.php');

?>  

<section id="muscularSystemWrapper">
    <section id="muscularSystemContent">
        <section id="changeView">
            <div class="person styleActive">
                <p>Body</p>
            </div>
            <div class="list">
                <p>List</p>
            </div>

            <div class="clear"></div>

        </section>

        <!-- LIST -->
        <section id="muscleListSHOW">
            <div class="muscleListIcons">

            </div>
            <?php include('../muscularSystem/muscleList.php'); ?>
        </section>

        <!-- MUSCULAR SYSTEM -->
        <section id="personSHOW">
            <div class="muscleName">
                <h6>MUSCLE NAME</h6>
                <h3 id="muscleName"></h3>
            </div>

            <svg id="muscularSystemSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 398.33 639.43">
                <g id="Body">
                    <path id="Body" data-name="Body"
                        d="M296.89,251.24c-1-3.45-4.6-12-5.09-16.25s1.15-16.08,1-22.32-1.64-14.77-2.46-24.95.66-17.89.66-29.54-7.88-17.39-12.64-21.5c-3.86-3.33-10.43-4.6-16-5.14a25.94,25.94,0,0,1-8-2.15c-25.4-11.23-35.85-19.85-38-22.57-2.31-2.88-.28-8.16-.28-14.37,2.6-1.76,4.08-9.91,4.92-13.43,5.46-2.88,5.93-13.9,5.93-16.13a2.17,2.17,0,0,0-2-2.31l1-20.51c.41-8.35-9.07-14.08-9.07-14.08l2.73-.2a23,23,0,0,0-5.22-2.53l1.78-.6c-3.56-1.66-9.85-2.25-9.85-2.25a26.43,26.43,0,0,1,5.1-3.44c-2-.47-7,0-7,0s-.36-.71,3.79-2.85c-4.51,1-10.91,2.14-10.91,2.14l2.17-2.73c-1.39.12-4.07,1.78-4.07,1.78l1.78-3.8c-10.44,2-14.83,8.43-14.83,8.43l-.36-2.38a75,75,0,0,0-7.23,7.83L174.52,22c-4.27,3-6.61,10-6.61,10l-.25-1.72c-2,2-1.62,5.84-1.4,9.81l1,20.51a2.17,2.17,0,0,0-2,2.31c0,2.23.47,13.25,5.93,16.13.84,3.52,2.32,11.67,4.92,13.43,0,6.21,2,11.49-.28,14.37-2.2,2.72-12.65,11.34-38.05,22.57a25.94,25.94,0,0,1-8,2.15c-5.58.54-12.16,1.81-16,5.14-4.76,4.11-12.64,9.85-12.64,21.5s1.48,19.37.66,29.54-2.3,18.71-2.46,24.95,1.47,18.05,1,22.32-4.1,12.8-5.09,16.25-1.8,15.42-1.64,20.51,1,15.26,1.48,18.87,2.46,17.9,3,22.49,1.81,18.71,2.47,23.47a63.24,63.24,0,0,1-.17,17.56c-1,5.74-2.46,9.19,0,13.45s9.36,13.79,9.36,13.79,9.35,0,12-1.8,8.37-6.41,5.91-10.51-5.91-6.89-5.42-12a83.51,83.51,0,0,0,.33-9.68s-2.3-6.24-7.06-9c.16-4.43,2.79-26.58,4.6-32.49s6.4-20.85,6.4-31.68,1.15-30.36,4.26-44.47,5.58-26.43,5.58-39.23c5.58,11.33,14.28,19.37,14.61,46.12s1.31,39.72-.33,45.62-10.83,26.92-13,41.53-6.24,51.86-6.24,59.08-1.15,45.62-.82,51c.22,3.65,1.12,14.93,1.77,22.84a35.61,35.61,0,0,1-2,15.14c-4.9,13.4-8.46,24.62-8.46,30.62V516a62,62,0,0,0,1.16,11.93c1.94,9.93,5.91,30.54,8.59,46.8a69.85,69.85,0,0,1,.92,11.37v.51a23.83,23.83,0,0,1-1.27,7.48,16.45,16.45,0,0,0-.86,5.11v6.33a7.42,7.42,0,0,1-2.44,5.51c-4.12,3.75-12,11.34-11.51,14.26.65,3.94,2.62,6.73,6.89,7.22s33.48,3.77,33.48-5.25A51.62,51.62,0,0,0,154.6,612s-.26-41,6.93-64.79a71,71,0,0,0,3.1-21c-.11-16.23-1.28-32.08-1.79-43.73a45.18,45.18,0,0,1,4.29-21.31c7-14.84,8.66-18.59,9.63-23.16,1.15-5.42,6.73-33.64,7.88-39.55S196,350.18,196,350.16s10.25,42.38,11.4,48.29,6.73,34.13,7.88,39.55c1,4.57,2.64,8.32,9.63,23.16a45.18,45.18,0,0,1,4.29,21.31c-.51,11.65-1.68,27.5-1.79,43.73a71,71,0,0,0,3.1,21C237.74,571,237.48,612,237.48,612a51.62,51.62,0,0,0-2.14,15.27c0,9,29.22,5.74,33.48,5.25s6.24-3.28,6.9-7.22c.48-2.92-7.4-10.51-11.52-14.26a7.41,7.41,0,0,1-2.43-5.51v-6.33a16.44,16.44,0,0,0-.87-5.11,23.83,23.83,0,0,1-1.27-7.48v-.51a69.85,69.85,0,0,1,.92-11.37c2.68-16.26,6.65-36.87,8.59-46.8A62,62,0,0,0,270.3,516V502.5c0-6-3.56-17.22-8.45-30.62a35.46,35.46,0,0,1-2-15.14c.66-7.91,1.55-19.19,1.77-22.84.33-5.42-.82-43.82-.82-51s-4.1-44.48-6.24-59.08-11.32-35.62-13-41.53-.66-18.87-.33-45.62,9-34.79,14.61-46.12c0,12.8,2.46,25.11,5.58,39.23s4.26,33.64,4.26,44.47,4.6,25.77,6.4,31.68,4.44,28.06,4.6,32.49c-4.76,2.79-7.06,9-7.06,9a83.51,83.51,0,0,0,.33,9.68c.49,5.09-3,7.88-5.41,12s3.28,8.7,5.9,10.51,12,1.8,12,1.8,6.9-9.52,9.36-13.79,1-7.71,0-13.45a63.24,63.24,0,0,1-.17-17.56c.66-4.76,2-18.88,2.47-23.47s2.46-18.88,2.95-22.49,1.31-13.78,1.48-18.87S297.87,254.68,296.89,251.24Z"
                        style="fill:#d1d7e7" />
                </g>
                <g id="Muscles">
                    <g id="muscularSystem">
                        <a class="Tabialis_Anterior__Main">
                            <g class="main" id="Tabialis_Anterior__Main" data-name="Tabialis Anterior__Main">
                                <path id="Tabialis_Anterior__Left" data-name="Tabialis Anterior__Left"
                                    d="M141.17,589.11s7.05-34.23,0-64c-8.73-36.81-9-53-9-53S124,487.6,125,514.54c.23,11.25,1.87,18,4,27.88S139,589.11,139,589.11Z" />
                                <path id="Tabialis_Anterior__Right" data-name="Tabialis Anterior__Right"
                                    d="M251.49,589.11s-7.06-34.23,0-64c8.72-36.81,9-53,9-53s8.15,15.49,7.21,42.43c-.23,11.25-1.87,18-4,27.88s-10.07,46.69-10.07,46.69Z" />
                            </g>
                        </a>
                        <a class="Soleus__Main">
                            <g class="main" id="Soleus__Main">
                                <path id="Soleus__Left" d="M147.8,587s6.94-4.2,7.78-25.87-6.31-25.45-6.31-25.45Z" />
                                <path id="Soleus__Right" d="M244.85,587s-6.94-4.2-7.78-25.87,6.31-25.45,6.31-25.45Z" />
                            </g>
                        </a>
                        <a class="Gastrocnemius__Main">
                            <g class="main" id="Gastrocnemius__Main">
                                <path id="Gastrocnemius__Left"
                                    d="M149.48,531.87l9.26-44.17a130.2,130.2,0,0,1,0,58.06C155.74,533.34,149.48,531.87,149.48,531.87Z" />
                                <path id="Gastrocnemius__Right"
                                    d="M243.17,531.87l-9.25-44.17a130,130,0,0,0,0,58.06C236.91,533.34,243.17,531.87,243.17,531.87Z" />
                            </g>
                        </a>
                        <a class="Vastus_Lateralis__Main">
                            <g class="main" id="Vastus_Lateralis__Main" data-name="Vastus Lateralis__Main">
                                <path id="Vastus_Lateralis__Left" data-name="Vastus Lateralis__Left"
                                    d="M135.94,361s-7.35,57.43,0,72.51c2.9-1.94,6.69-9.55,8.36-20.5a44.62,44.62,0,0,0-.82-15.76Z" />
                                <path id="Vastus_Lateralis__Right" data-name="Vastus Lateralis__Right"
                                    d="M256.72,361s7.34,57.43,0,72.51c-2.91-1.94-6.7-9.55-8.37-20.5a44.89,44.89,0,0,1,.82-15.76Z" />
                            </g>
                        </a>
                        <a class="Vastus_medialis__Main">
                            <g class="main" id="Vastus_medialis__Main" data-name="Vastus medialis__Main">
                                <path id="Vastus_medialis__Left" data-name="Vastus medialis__Left"
                                    d="M162.81,361s-13.72,42.54-11.6,59.94,11.6,16.63,11.6,16.63,10.25,1,11.41-23S162.81,361,162.81,361Z" />
                                <path id="Vastus_medialis__Right" data-name="Vastus medialis__Right"
                                    d="M229.84,361s13.73,42.54,11.6,59.94-11.6,16.63-11.6,16.63-10.25,1-11.41-23S229.84,361,229.84,361Z" />
                            </g>
                        </a>
                        <a class="Rectus_Femoralist__Main">
                            <g class="main" id="Rectus_Femoralist__Main" data-name="Rectus Femoralist__Main">
                                <path id="Rectus_Femoralist__Left" data-name="Rectus Femoralist__Left"
                                    d="M147.65,405s10.6-31.58,11.21-47.47a155.76,155.76,0,0,0-3.67-39.12c-2-9.17-3.26-15.89-5.5-19.76-3.67,7.74-10.41,21-11,36.67a155,155,0,0,0,2.25,33.21C142,374.39,147.65,405,147.65,405Z" />
                                <path id="Rectus_Femoralist__Right" data-name="Rectus Femoralist__Right"
                                    d="M245,405s-10.59-31.58-11.21-47.47a155.76,155.76,0,0,1,3.67-39.12c2-9.17,3.26-15.89,5.5-19.76,3.67,7.74,10.41,21,11,36.67a154.3,154.3,0,0,1-2.25,33.21C250.7,374.39,245,405,245,405Z" />
                            </g>
                        </a>
                        <a class="Gluteus_Medius__Main">
                            <g class="main" id="Gluteus_Medius__Main" data-name="Gluteus Medius__Main">
                                <path id="Gluteus_Medius__Left" data-name="Gluteus Medius__Left"
                                    d="M147.3,294.89l5.29-13.17S165.9,294.89,147.3,294.89Z" />
                                <path id="Gluteus_Medius__Right" data-name="Gluteus Medius__Right"
                                    d="M245.36,294.89l-5.3-13.17S226.75,294.89,245.36,294.89Z" />
                            </g>
                        </a>
                        <a class="Rectus_Abdominus__Main">
                            <g data-name="Rectus Abdominus__Main">
                                <g id="Rectus_Abdominus__Main" data-name="Rectus Abdominus__LeftMain">
                                    <path id="Rectus_Abdominus__Left" data-name="Rectus Abdominus__Left"
                                        d="M194.84,335.07v-61.4s1-6.71-4.93-6.71H177.27s-7.3,2.17-7.3,12.44,9.67,54.88,9.67,54.88.39,6.32,6.32,6.32S194.84,338.42,194.84,335.07Z" />
                                    <path id="Rectus_Abdominus__Left-2" data-name="Rectus Abdominus__Left"
                                        d="M194.28,250.35v9.36s-.12,5.29-3.94,5.29H175.93s-3.45.5-3.45-5.78v-7s-.74-5.67,4.44-5.67h13.67S194.28,245.92,194.28,250.35Z" />
                                    <path id="Rectus_Abdominus__Left-3" data-name="Rectus Abdominus__Left"
                                        d="M194.28,226.21v13.42s.25,4.31-4.06,4.31H172.45s-3.42,1-3.42-10.46,10.9-10.9,10.9-10.9h10.9S194.28,222.15,194.28,226.21Z" />
                                    <path id="Rectus_Abdominus__Left-4" data-name="Rectus Abdominus__Left"
                                        d="M182,201.6a12.18,12.18,0,0,1-4.46.84H170a4.19,4.19,0,0,0-4.6,4.59v6.25s0,6,5.27,6h18.59s5.24.5,5.24-5.23v-9.42s.3-5.17-4.62-5.17h0a11.86,11.86,0,0,0-3.87.65C184.84,200.52,183.4,201,182,201.6Z" />
                                    <path id="Rectus_Abdominus__Right" data-name="Rectus Abdominus__Right"
                                        d="M197.81,335.07v-61.4s-1-6.71,4.94-6.71h12.63s7.31,2.17,7.31,12.44S213,334.28,213,334.28s-.39,6.32-6.31,6.32S197.81,338.42,197.81,335.07Z" />
                                    <path id="Rectus_Abdominus__Right-2" data-name="Rectus Abdominus__Right"
                                        d="M198.37,250.35v9.36s.12,5.29,3.94,5.29h14.41s3.45.5,3.45-5.78v-7s.74-5.67-4.43-5.67H202.07S198.37,245.92,198.37,250.35Z" />
                                    <path id="Rectus_Abdominus__Right-3" data-name="Rectus Abdominus__Right"
                                        d="M198.37,226.21v13.42s-.24,4.31,4.07,4.31h17.77s3.41,1,3.41-10.46-10.9-10.9-10.9-10.9h-10.9S198.37,222.15,198.37,226.21Z" />
                                    <path id="Rectus_Abdominus__Right-4" data-name="Rectus Abdominus__Right"
                                        d="M210.69,201.6a12.19,12.19,0,0,0,4.47.84h7.53a4.18,4.18,0,0,1,4.59,4.59v6.25s0,6-5.26,6h-18.6s-5.23.5-5.23-5.23v-9.42s-.31-5.17,4.61-5.17h0a11.82,11.82,0,0,1,3.87.65C207.81,200.52,209.25,201,210.69,201.6Z" />
                                </g>
                            </g>
                        </a>
                        <a class="External_Oblique__Main">
                            <g id="External_Oblique__Main" class="main" data-name="External Oblique__Main">
                                <path id="External_Oblique__Left" data-name="External Oblique__Left"
                                    d="M160.51,199.49l-10.24-3.61s-4.91-1.57-3,5.2,7.31,15.62,7.31,34-.93,42.52-.93,42.52l9.08,7.12s3.3,3.64,3.82-2.26,1.74-26.46,1.74-37C165.37,244.3,164.5,231,164.5,231v-9.2c-2.43-3.81-2.43-16-2.43-16S162.05,200,160.51,199.49Z" />
                                <path id="External_Oblique__Right" data-name="External Oblique__Right"
                                    d="M232.14,199.49l10.24-3.61s4.91-1.57,3,5.2-7.31,15.62-7.31,34,.93,42.52.93,42.52l-9.09,7.12s-3.3,3.64-3.82-2.26-1.74-26.46-1.74-37c3-1.23,3.82-14.55,3.82-14.55v-9.2c2.43-3.81,2.43-16,2.43-16S230.6,200,232.14,199.49Z" />
                            </g>
                        </a>
                        <a class="Pectoralis_Major__Main">
                            <g id="Pectoralis_Major__Main" class="main" data-name="Pectoralis Major__Main">
                                <path id="Pectoralis_Major__Left" data-name="Pectoralis Major__Left"
                                    d="M120.74,177.7s7.58-13.7,12.83-26.52S159,141,159,141s14.74,1.46,24.4,1.46,11.54,2.33,11.54,8.45V183s.46,14.28-13.24,14.28S141.73,192.86,120.74,177.7Z" />
                                <path id="Pectoralis_Major__Right" data-name="Pectoralis Major__Right"
                                    d="M271.91,177.7a294.21,294.21,0,0,1-12.82-26.52c-5.25-12.82-25.4-10.2-25.4-10.2s-14.74,1.46-24.4,1.46-11.54,2.33-11.54,8.45V183s-.46,14.28,13.24,14.28S250.92,192.86,271.91,177.7Z" />
                            </g>
                        </a>
                        <a class="Trapezius__Main">
                            <g id="Trapezius__Main" class="main">
                                <path id="Trapezius__Left"
                                    d="M146.21,133.13l16,2.67a4,4,0,0,0,3.59-1.2l9.28-9.71a2.74,2.74,0,0,0,.26-3.48L172.29,117a2.21,2.21,0,0,0-2.86-.68l-23.91,12.83a1.79,1.79,0,0,0-.9,2l.14.61A1.79,1.79,0,0,0,146.21,133.13Z" />
                                <path id="Trapezius__Right"
                                    d="M246.45,133.13l-16,2.67a4,4,0,0,1-3.59-1.2l-9.28-9.71a2.74,2.74,0,0,1-.26-3.48l3.09-4.38a2.23,2.23,0,0,1,2.87-.68l23.9,12.83a1.79,1.79,0,0,1,.9,2l-.14.61A1.78,1.78,0,0,1,246.45,133.13Z" />
                            </g>
                        </a>
                        <a class="Sternocleidomastoid__Main">
                            <g id="Sternocleidomastoid__Main" class="main">
                                <path id="Sternocleidomastoid__Left"
                                    d="M190.78,135.61h0a3.08,3.08,0,0,1-4-1.35l-10-18.68a4.2,4.2,0,0,1,1.32-5.44h0a4.2,4.2,0,0,1,6.27,1.88l8,19.62A3.09,3.09,0,0,1,190.78,135.61Z" />
                                <path id="Sternocleidomastoid__Right"
                                    d="M201.87,135.61h0a3.09,3.09,0,0,0,4-1.35l10-18.68a4.2,4.2,0,0,0-1.33-5.44h0a4.2,4.2,0,0,0-6.27,1.88l-8,19.62A3.08,3.08,0,0,0,201.87,135.61Z" />
                            </g>
                        </a>
                        <a class="Deltoid__Main">
                            <g id="Deltoid__Main" class="main">
                                <path id="Deltoid__Left"
                                    d="M138.94,140.76s-3.28-.51-6.56-5.84h-7.92s-21.86,4.65-21.86,28.42v8.88s.55,9.7,1.91,13.66c4.92-1.64,14.76-10.38,17.63-20.63S130.34,145.64,138.94,140.76Z" />
                                <path id="Deltoid__Right"
                                    d="M253.71,140.76s3.28-.51,6.56-5.84h7.92s21.86,4.65,21.86,28.42v8.88s-.54,9.7-1.91,13.66c-4.92-1.64-14.76-10.38-17.63-20.63S262.32,145.64,253.71,140.76Z" />
                            </g>
                        </a>
                        <a class="Sartorius__Main">
                            <g id="Sartorius__Main" class="main">
                                <path id="Sartorius__Left"
                                    d="M180.19,402.57h0a3.12,3.12,0,0,1-4-2.27L152.76,299.05a2.91,2.91,0,0,1,1.53-3.25h0a2.91,2.91,0,0,1,4.14,1.93l23.85,101.16A3.1,3.1,0,0,1,180.19,402.57Z" />
                                <path id="Sartorius__Right"
                                    d="M212.47,402.57h0a3.11,3.11,0,0,0,4-2.27l23.45-101.25a2.92,2.92,0,0,0-1.52-3.25h0a2.92,2.92,0,0,0-4.15,1.93L210.37,398.89A3.1,3.1,0,0,0,212.47,402.57Z" />
                            </g>
                        </a>
                        <a class="Brachialis__Main">
                            <g id="Brachialis__Main" class="main">
                                <path id="Brachialis__Left"
                                    d="M104.7,188.6l12.84-5.92s-11.17,14.29-11.17,28.8v23.89a18.56,18.56,0,0,1-4.91-13.06C101.46,213.83,104.7,188.6,104.7,188.6Z" />
                                <path id="Brachialis__Right"
                                    d="M288,188.6l-12.83-5.92s11.16,14.29,11.16,28.8v23.89a18.56,18.56,0,0,0,4.91-13.06C291.19,213.83,288,188.6,288,188.6Z" />
                            </g>
                        </a>
                        <a class="Flexor_Carpi_Radialis__Main">
                            <g id="Flexor_Carpi_Radialis__Main" class="main" data-name="Flexor Carpi Radialis__Main">
                                <path id="Flexor_Carpi_Radialis__Left" data-name="Flexor Carpi Radialis__Left"
                                    d="M124,274.45s1.79-8.94,0-23.34c-2.45,2.12-4.8,6.59-4.8,9.49S121.11,271.21,124,274.45Z" />
                                <path id="Flexor_Carpi_Radialis__Right" data-name="Flexor Carpi Radialis__Right"
                                    d="M268.64,274.45s-1.79-8.94,0-23.34c2.46,2.12,4.8,6.59,4.8,9.49S271.54,271.21,268.64,274.45Z" />
                            </g>
                        </a>
                        <a class="Brachioradialis__Main">
                            <g id="Brachioradialis__Main" class="main">
                                <path id="Brachioradialis__Left"
                                    d="M112,333.51s3.26-9.11,3.42-31.08a44.06,44.06,0,0,0,4.72-18.54V271.36s-4.88-14.49-17.57-33.52c-2.45,11.88-2.45,10.25-2.45,14.32v16.43A130.19,130.19,0,0,0,107.65,301C109,311.38,110.42,327.49,112,333.51Z" />
                                <path id="Brachioradialis__Right"
                                    d="M280.61,333.51s-3.25-9.11-3.42-31.08a44.06,44.06,0,0,1-4.72-18.54V271.36s4.89-14.49,17.58-33.52c2.44,11.88,2.44,10.25,2.44,14.32v16.43A129.67,129.67,0,0,1,285,301C283.7,311.38,282.24,327.49,280.61,333.51Z" />
                            </g>
                        </a>
                        <a class="Extensor_Carpi_Ulnaris__Main">
                            <g class="main" id="Extensor_Carpi_Ulnaris__Main" data-name="Extensor Carpi Ulnaris__Main">
                                <path id="Extensor_Carpi_Ulnaris__Left" data-name="Extensor Carpi Ulnaris__Left"
                                    d="M102.28,334.16h7.16s-3.09-26.52-5.53-36.61-7.16-24.24-7.16-28.31v18.39S100.82,305.69,102.28,334.16Z" />
                                <path id="Extensor_Carpi_Ulnaris__Right" data-name="Extensor Carpi Ulnaris__Right"
                                    d="M290.37,334.16h-7.16s3.09-26.52,5.53-36.61,7.16-24.24,7.16-28.31v18.39S291.84,305.69,290.37,334.16Z" />
                            </g>
                        </a>
                        <a class="Biceps__Main">
                            <g id="Biceps__Main" class="main">
                                <ellipse id="Biceps__Left" cx="120.05" cy="213.3" rx="27.83" ry="10.75"
                                    transform="translate(-110.16 296.44) rotate(-80.48)" />
                                <ellipse id="Biceps__Right" cx="272.6" cy="213.3" rx="10.75" ry="27.83"
                                    transform="translate(-31.51 48) rotate(-9.52)" />
                            </g>
                        </a>
                    </g>
                </g>
            </svg>
        </section>
    </section>

    <section id="muscleContent">

        <?php include('../muscularSystem/welcomeInfo.php');?>

    </section>
</section>

<script>
    /*** SCROLL TO TOP WHEN CLICK ON ANOTHER MUSCLE 
     * 
    $(function () {
        var ele = $('#muscleContent');
        var speed = 0,
            scroll = 75,
            scrolling;

        $('#muscularSystem a, .theList a').click(function () {
            // Scroll the element up
            scrolling = window.setInterval(function () {
                ele.scrollTop(ele.scrollTop() - scroll);
            }, speed);
        });

        $('#muscularSystem a, .theList a').bind({
            click: function (e) {
                // Prevent the default click action
                e.preventDefault();
            },
            mouseleave: function () {
                if (scrolling) {
                    window.clearInterval(scrolling);
                    scrolling = false;
                }
            }
        });
    });
    */
</script>