</div>
<div class="mt-4 p-4 border-t border-blue-200 md:flex md:justify-between text-center">
    <div>
        <?php echo '&copy; ' . (new DateTime())->format('Y') . ' Pratima Singh' ?>
    </div>

    <div>
        <a href="{{route('contact')}}" class="border-b border-dotted border-indigo-600">Contact</a>
    </div>
</div>

@livewireScripts
<script src="{{ mix("build/js/app.js") }}"></script>
<script src="{{asset('js/prism.js')}}" defer></script>

</body>
</html>
