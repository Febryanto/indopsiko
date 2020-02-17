@media (min-width: 768px) {

/* show 3 items */
.cinner .active,
.cinner .active + .crsitem,
.cinner .active + .crsitem + .crsitem,
.cinner .active + .crsitem + .crsitem + .crsitem  {
    display: block;
}

.cinner .crsitem.active:not(.crsitem-right):not(.crsitem-left),
.cinner .crsitem.active:not(.crsitem-right):not(.crsitem-left) + .crsitem,
.cinner .crsitem.active:not(.crsitem-right):not(.crsitem-left) + .crsitem + .crsitem,
.cinner .crsitem.active:not(.crsitem-right):not(.crsitem-left) + .crsitem + .crsitem + .crsitem {
    transition: none;
}

.cinner .crsitem-next,
.cinner .crsitem-prev {
  position: relative;
  transform: translate3d(0, 0, 0);
}

.cinner .active.crsitem + .crsitem + .crsitem + .crsitem + .crsitem {
    position: absolute;
    top: 0;
    right: -25%;
    z-index: -1;
    display: block;
    visibility: visible;
}

/* left or forward direction */
.active.crsitem-left + .crsitem-next.crsitem-left,
.crsitem-next.crsitem-left + .crsitem,
.crsitem-next.crsitem-left + .crsitem + .crsitem,
.crsitem-next.crsitem-left + .crsitem + .crsitem + .crsitem,
.crsitem-next.crsitem-left + .crsitem + .crsitem + .crsitem + .crsitem {
    position: relative;
    transform: translate3d(-100%, 0, 0);
    visibility: visible;
}

/* farthest right hidden item must be abso position for animations */
.cinner .crsitem-prev.crsitem-right {
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    display: block;
    visibility: visible;
}

/* right or prev direction */
.active.crsitem-right + .crsitem-prev.crsitem-right,
.crsitem-prev.crsitem-right + .crsitem,
.crsitem-prev.crsitem-right + .crsitem + .crsitem,
.crsitem-prev.crsitem-right + .crsitem + .crsitem + .crsitem,
.crsitem-prev.crsitem-right + .crsitem + .crsitem + .crsitem + .crsitem {
    position: relative;
    transform: translate3d(100%, 0, 0);
    visibility: visible;
    display: block;
    visibility: visible;
}

}
}