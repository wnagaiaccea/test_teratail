convert -font fonts/ipaexg.ttf -pointsize 64  -background none  label:"あくせあシステム開発" \
        \( +clone -sparse-color Barycentric '0,%h blue %w,0 red' \
           \) -compose In -composite \
        -virtual-pixel transparent -distort arc 120 \
        \( +clone -background black -shadow 100x2+4+4 \
           \) +swap -background white -compose over -layers merge +repage \
        colorful_arc.jpg
