FROM rado6/l3

RUN touch test4
RUN date > t4
RUN touch test4.2

ADD te2.php te2.php
